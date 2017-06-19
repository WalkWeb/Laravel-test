<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Servise;

class AdminPagesAddController extends Controller
{
    //
    public function execute(Request $request) {
        
        if($request->isMethod('post')) {
            $input = $request->except('_token');
            
            $message = [
                'required' => 'Поле :attribute не заполнено',
                'unique' => 'Поле :attribute не уникально'
            ];
            
            $valid = Validator::make($input, [
                'name' => 'required|max:255',
                'id' => 'required|unique:servises|max:255',
                'description' => 'required'
            ], $message);
            
            if($valid->fails()) {
                return redirect()->route('pagesAdd')->withErrors($valid)->withInput();
            }
            
            if($request->hasFile('images')) {
                $file = $request->file('images');
                
                $input['images'] = $file->getClientOriginalName();
                
                $file->move(public_path().'/images/', $input['images']);
            }
            
            $page = new Servise();
            
            $page->fill($input);
            
            if($page->save()) {
                return redirect('admin')->with('status', 'Новый сервис добавлен');
            }
        }
        
        $data =[
            'title' => 'Новый сервис'
        ];
        
        return view('admin.pagesadd', $data);
    }
}
