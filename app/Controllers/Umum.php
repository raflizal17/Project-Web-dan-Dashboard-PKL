<?php

namespace App\Controllers;

class Umum extends BaseController
{
    public function index()
    {
        $this->data = [
            'menuActive' => 'Home',
            'subMenuActive' => ''
        ];

        return view('dashboard/umum/index', $this->data);
    }

    public function kajian1()
    {
        $this->data = [
            'menuActive' => 'Hasil Kajian',
            'subMenuActive' => 'Kajian 1'
        ];

        return view('dashboard/umum/kajian1', $this->data);
    }

    public function kajian2()
    {
        $this->data = [
            'menuActive' => 'Hasil Kajian',
            'subMenuActive' => 'Kajian 2'
        ];

        return view('dashboard/umum/kajian2', $this->data);
    }

    public function peta1()
    {
        $this->data = [
            'menuActive' => 'Peta Tematik',
            'subMenuActive' => 'Peta 1'
        ];

        return view('dashboard/umum/peta1', $this->data);
    }

    public function peta2()
    {
        $this->data = [
            'menuActive' => 'Peta Tematik',
            'subMenuActive' => 'Peta 2'
        ];

        return view('dashboard/umum/peta2', $this->data);
    }

    public function tabeldinamis()
    {
        $this->data = [
            'menuActive' => 'Tabel Dinamis',
            'subMenuActive' => ''
        ];

        return view('dashboard/umum/tabeldinamis', $this->data);
    }
}
