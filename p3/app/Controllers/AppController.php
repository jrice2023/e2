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
        $rounds = $this->app->db()->all('rounds');
        
        return $this->app->view('history', ['rounds' => $rounds]);
    }

    public function round()
    {        
        $id = $this->app->param('id');

        $round = $this->app->db()->findById('rounds',$id);
        
            return $this->app->view('round', ['round' => $round]);
    }
}