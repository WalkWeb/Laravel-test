<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\General;
use App\Portfolio;
use App\Servise;
use App\Slide;
use App\Team;
use Mail;

class IndexController extends Controller
{
    // Контроллер главной страницы
    public function execute(Request $request) {
        
        if($request->isMethod('post')) {
            
            $message = [
                'required' => 'Поле :attribute не заполнено',
                'email' => 'Поле :attribute некорректно'
            ];
            
            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'text' => 'required'
            ], $message);
            
            $data = $request->all();
            
            $result = Mail::send('main.email', ['data' => $data], function($message) use ($data) {
                
                $mail = env('MAIL');
                
                $message->from($data['email'], $data['name']);
                $message->to($mail, 'Admin')->subject('Question');
            });
            
            
            return redirect()->route('home')->with('status', 'Сообщение отправлено!');
            
            
            
        }
        
        // Получаем данные из бд
        $generals = General::get(array('title','motto','advantages'));
        $portfolios = Portfolio::get(array('name', 'description', 'imagesmall', 'imagebig'));
        $servises = Servise::all();
        $slides = Slide::all();
        $teams = Team::all();
        
        return view('index', array(
                                'generals' => $generals,
                                'portfolios' => $portfolios,
                                'servises' => $servises,
                                'slides' => $slides,
                                'teams' => $teams
        ));
    }
}
