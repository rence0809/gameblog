<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpagesController extends Controller
{
    public function index(){
        return view('webpages.index');
    }

    public function about(){
        return view('webpages.about');
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('webpages.services') ->with($data);
    }
}
