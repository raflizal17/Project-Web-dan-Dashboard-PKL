<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function __construct()
    {
        helper('menu_helper');
        helper('peta_helper');
    }

    public function index($riset)
    {
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
                $title = 'Bid. Umum';
                break;
        }
        $menu = getMenu();
        $judul = getJudul();

        $this->data = [
            'menu' => $menu[$riset],
            'judul' => $judul,
            'menuActive' => 'Home',
            'riset' => $riset,
            'title' => $title,
        ];        

        return view('dashboard/'.$riset.'/index', $this->data);
    }

    public function page($riset, $page)
    {
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
                $title = 'Bid. Umum';
                break;
        }

        switch ($page) {
            case 'kajian1' :
                $menuActive = 'Hasil Kajian';
                $subMenuActive = 'Kajian 1';
                break;
            case 'kajian2' :
                $menuActive = 'Hasil Kajian';
                $subMenuActive = 'Kajian 2';
                break;
            case 'peta1' :
                $menuActive = 'Peta Tematik';
                $subMenuActive = 'Kajian 1';
                break;
            case 'peta2' :
                $menuActive = 'Peta Tematik';
                $subMenuActive = 'Kajian 2';
                break;
            case 'tabel1' :
                $menuActive = 'Tabel Dinamis';
                $subMenuActive = 'Kajian 1';
                break;
            case 'tabel2' :
                $menuActive = 'Tabel Dinamis';
                $subMenuActive = 'Kajian 2';
                break;
            case 'gambaranumum' :
                $menuActive = 'Gambaran Umum';
                $subMenuActive = '';
                break;
            default :
                $title = 'Home';
                break;
        }

        $menu = getMenu();
        $judul = getJudul();

        $this->data = [
            'menu' => $menu[$riset],
            'judul' => $judul,
            'menuActive' => $menuActive,
            'subMenuActive' => $subMenuActive,
            'riset' => $riset,
            'title' => $title,
        ];   
            
        return view('dashboard/'.$riset.'/'.$page, $this->data);
    }

    public function peta($riset, $page, $idPeta) 
    {
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
                $title = 'Bid. Umum';
                break;
        }

        switch ($page) {
            case 'kajian1' :
                $menuActive = 'Hasil Kajian';
                $subMenuActive = 'Kajian 1';
                break;
            case 'kajian2' :
                $menuActive = 'Hasil Kajian';
                $subMenuActive = 'Kajian 2';
                break;
            case 'peta1' :
                $menuActive = 'Peta Tematik';
                $subMenuActive = 'Kajian 1';
                break;
            case 'peta2' :
                $menuActive = 'Peta Tematik';
                $subMenuActive = 'Kajian 2';
                break;
            case 'tabel1' :
                $menuActive = 'Tabel Dinamis';
                $subMenuActive = 'Kajian 1';
                break;
            case 'tabel2' :
                $menuActive = 'Tabel Dinamis';
                $subMenuActive = 'Kajian 2';
                break;
            default :
                $title = 'Home';
                break;
        }

        $menu = getMenu();
        $judul = getJudul();

        $peta = getPeta();
        $peta = $peta[$idPeta];

        $this->data = [
            'peta' => $peta,
            'menu' => $menu[$riset],
            'judul' => $judul,
            'menuActive' => $menuActive,
            'subMenuActive' => $subMenuActive,
            'riset' => $riset,
            'title' => $title,
        ];

        return view('dashboard/'.$riset.'/'.$page, $this->data);
    }
}