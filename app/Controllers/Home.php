<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        helper('landing_page_helper');
    }

    public function index()
    {
        echo view('landing_page/home/header_home');
        echo view('landing_page/home/riset1_home');
        echo view('landing_page/home/riset2_home');
        echo view('landing_page/home/riset3_home');
        echo view('landing_page/home/riset4_home');
        echo view('landing_page/home/riset5_home');
        echo view('landing_page/home/umum_home');
        echo view('landing_page/home/footer_home');
    }

    public function riset($riset){
        switch ($riset) {
            case 'riset1' :
                $title = 'Riset 1';
                break;
            case 'riset2' :
                $title = 'Riset 2';
                break;
            case 'riset3' :
                $title = 'Riset 3';
                break;
            case 'riset4' :
                $title = 'Riset 4';
                break;
            case 'riset5' :
                $title = 'Riset 5';
                break;
            case 'umum' :
                $title = 'Kajian Umum';
                break;
        }

        $info = getInfo();

        $this->data = [
            'judul' => $info[$riset]['judul'],
            'title' => $info[$riset]['title'],
            'riset' => $info[$riset]['riset'],
            'href' => $info[$riset]['href'],
            'css' => $info[$riset]['css'],
            'js' => $info[$riset]['js'],
            'img' => $info[$riset]['img'],
        ];        

        return view('landing_page/'.$riset.'/index', $this->data);
    }


}
