<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Servise;

class AdminPagesController extends Controller
{
    // Страницами выступает расширеная информация о сервисе
    public function execute() {
        
        $pages = Servise::all();
        
        $data = [
            'title' => 'Сервис',
            'pages' => $pages
        ];
        
        return view('admin.pages', $data);
    }
}
