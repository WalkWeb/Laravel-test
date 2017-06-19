<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Servise;

class AdminPagesEditController extends Controller
{
    //
    public function execute($id, Request $request) {
        
        $servise = Servise::find($id);
        
        // Если метод Delete - удаляем запись
        if($request->isMethod('delete')) {
            $servise->delete();
            
            return redirect('admin')->with('status', 'Сервис удален');
        }
        
        // Если метод Post - обновляем запись и картинку
        if($request->isMethod('post')) {
            
            $input = $request->except('_token');
            
            // Валидируем данные
            $valid = Validator::make($input, [
                'name' => 'required|max:255',
                'id' => 'required|max:255|unique:servises,id,'.$input['id'],
                'description' => 'required'
            ]);
            
            // Проверяем ошибки валидации
            if($valid->fails()) {
                return redirect()
                    ->route('pagesEdit', ['page' => $input['id']])
                    ->withErrors($valid);
            }
            
            // Проверяем, указали ли новую картинку, если да - обновляем, иначе - указываем имя старой картинки
            if($request->hasFile('images')) {
                $file = $request->file('images');
                $file->move(public_path().'/images/', $file->getClientOriginalName());
                $input['images'] = $file->getClientOriginalName();
            } else {
                $input['images'] = $input['old_images'];
            }
            
            $servise->fill($input);
            
            // Обновляем данные в бд
            if($servise->update()) {
                return redirect('admin')->with('status', 'Сервис обновлен');
            }
            
        }
        
        // Иначе отображаем вывод информации
        $readyPage = $servise->toArray();
        
        $data = [
            'title' => 'Редактирование сервиса: '.$readyPage['name'],
            'data' => $readyPage
        ];
        
        return view('admin.pagesedit', $data);
    }
}