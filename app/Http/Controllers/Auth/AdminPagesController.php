<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Servise;

class AdminPagesController extends Controller
{
    // ���������� ��������� ���������� ���������� � �������
    public function execute() {
        
        $pages = Servise::all();
        
        $data = [
            'title' => '������',
            'pages' => $pages
        ];
        
        return view('admin.pages', $data);
    }
}
