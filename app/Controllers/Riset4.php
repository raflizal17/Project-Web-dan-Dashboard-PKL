<?php

namespace App\Controllers;

class Riset4 extends BaseController
{
    public function index()
    {
        $this->data = [
            'menuActive' => 'Home',
            'subMenuActive' => ''
        ];

        return view('dashboard/riset4/index', $this->data);
    }

    public function kajian1()
    {
        $this->data = [
            'menuActive' => 'Hasil Kajian',
            'subMenuActive' => 'Kajian 1'
        ];

        return view('dashboard/riset4/kajian1', $this->data);
    }

    public function kajian2()
    {
        $this->data = [
            'menuActive' => 'Hasil Kajian',
            'subMenuActive' => 'Kajian 2'
        ];

        return view('dashboard/riset4/kajian2', $this->data);
    }

    public function peta1()
    {
        $this->data = [
            'menuActive' => 'Peta Tematik',
            'subMenuActive' => 'Peta 1'
        ];

        return view('dashboard/riset4/peta1', $this->data);
    }

    public function peta2()
    {
        $this->data = [
            'menuActive' => 'Peta Tematik',
            'subMenuActive' => 'Peta 2'
        ];

        return view('dashboard/riset4/peta2', $this->data);
    }

    public function tabeldinamis()
    {
        $this->data = [
            'menuActive' => 'Tabel Dinamis',
            'subMenuActive' => ''
        ];

        return view('dashboard/riset4/tabeldinamis', $this->data);
    }
}
