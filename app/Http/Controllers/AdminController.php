<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function execute() {
        
        $data = [
            'title' => 'Добро пожаловать в панель администратора!',
            'text' => 'Используйте соответствующий пункт меню слева, чтобы редактировать информацию на сайте.'
        ];
        
        return view('admin.index', $data);
    }
}
