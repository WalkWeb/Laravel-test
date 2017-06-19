<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servise;

class PageController extends Controller
{
    public function execute($id) {
        
        if(!$id) {
            abort(404);
        }
        
        $page = Servise::where('id', strip_tags($id))->first();
        
        $data = [
            'title' => $page->name,
            'text' => $page->text,
            'images' => $page->images
        ];
        
        return view('main.page', $data);
    }
}
