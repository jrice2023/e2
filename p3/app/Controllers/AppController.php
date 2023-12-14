<?php
namespace App\Controllers;

class AppController extends Controller
{
    public function index()
    {        
        if (null !==$this->app->old('results'))
        {
            $results= $this->app->old('results');
        
        return $this->app->view('index', ['results' => $results]);

        }

        return $this->app->view('index');
    }

    public function history()
    {        
        return $this->app->view('history');
    }

    public function details()
    {        
        return $this->app->view('details');
    }
}