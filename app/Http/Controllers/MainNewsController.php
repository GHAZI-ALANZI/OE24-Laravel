<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainNewsController extends Controller
{
    public function news()   {

            return view('main-news.news');
    }
    //#######################################
    public function businuss()   {

            return view('main-news.businuss');
    }
    //#######################################
    public function gesundheit()   {

            return view('main-news.gesundheit');
    }
    //#######################################
    public function politik()   {

            return view('main-news.politik');
    }
    //#######################################
      public function reise()   {

            return view('main-news.reise');
    }
    //#######################################
         public function sport()   {

            return view('main-news.sport');
    }
    //#######################################
            public function video()   {

            return view('main-news.video');
    }
    //#######################################

           public function wetter()   {

            return view('main-news.wetter');
    }
    //#######################################
         public function ticker()   {

            return view('main-news.ticker');
    }
    //#######################################



}

