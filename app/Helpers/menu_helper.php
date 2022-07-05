<?php 

function getMenu() {
    $menu = 
    [
        'riset1' => 
        [
            [
                'menu' => 'Home',
                'icon' => 'fa fa-home',
                'href' => '/riset1/dashboard',
            ],
            [
                'menu' => 'Gambaran Umum',
                'icon' => 'fa fa-home',
                'href' => '/riset1/dashboard/gambaranumum',
            ],
            [
                'menu' => 'Hasil Kajian',
                'icon' => 'fas fa-chart-pie',
                'href' => '#',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset1/dashboard/kajian1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset1/dashboard/kajian2',
                    ],
                ],
            ],
            [
                'menu' => 'Peta Tematik',
                'icon' => 'fas fa-map',
                'href' => '/riset1/dashboard',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset1/dashboard/peta1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset1/dashboard/peta2',
                    ],
                ],
            ],
            [
                'menu' => 'Tabel Dinamis',
                'icon' => 'fas fa-light fa-table',
                'href' => '/riset1/dashboard/tabeldinamis',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset1/dashboard/tabel1'
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset1/dashboard/tabel2'   
                    ]
                ]
            ],
            [
                'menu' => 'Tentang Riset 1',
                'icon' => 'fas fa-chevron-circle-left',
                'href' => '/riset1'
            ],
        ],
        
        'riset2' => 
        [
            [
                'menu' => 'Home',
                'icon' => 'fa fa-home',
                'href' => '/riset2/dashboard',
            ],
            [
                'menu' => 'Hasil Kajian',
                'icon' => 'fas fa-chart-pie',
                'href' => '/riset2/dashboard/kajian1',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset2/dashboard/kajian1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset2/dashboard/kajian2',
                    ],
                ],
            ],
            [
                'menu' => 'Peta Tematik',
                'icon' => 'fas fa-map',
                'href' => '/riset2/dashboard/peta1',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset2/dashboard/peta1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset2/dashboard/peta2/11',
                    ],
                ],
            ],
            [
                'menu' => 'Tabel Dinamis',
                'icon' => 'fas fa-light fa-table',
                'href' => '/riset2/dashboard/tabel1',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset2/dashboard/tabel1'
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset2/dashboard/tabel2'   
                    ]
                ]
            ],
            [
                'menu' => 'Tentang Riset 2',
                'icon' => 'fas fa-chevron-circle-left',
                'href' => '/riset2'
            ],
        ],

        'riset3' => 
        [
            [
                'menu' => 'Home',
                'icon' => 'fa fa-home',
                'href' => '/riset3/dashboard',
            ],
            [
                'menu' => 'Hasil Kajian',
                'icon' => 'fas fa-chart-pie',
                'href' => '#',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset3/dashboard/kajian1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset3/dashboard/kajian2',
                    ],
                ],
            ],
            [
                'menu' => 'Peta Tematik',
                'icon' => 'fas fa-map',
                'href' => '#',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        
                        'href' => '/riset3/dashboard/peta1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        
                        'href' => '/riset3/dashboard/peta2',
                    ],
                ],
            ],
            [
                'menu' => 'Tabel Dinamis',
                'icon' => 'fas fa-light fa-table',
                'href' => '/riset3/dashboard/tabeldinamis',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset3/dashboard/tabel1'
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset3/dashboard/tabel2'   
                    ]
                ]
            ],
            [
                'menu' => 'Tentang Riset 3',
                'icon' => 'fas fa-chevron-circle-left',
                'href' => '/riset3'
            ],
        ],

        'riset4' => 
        [
            [
                'menu' => 'Home',
                'icon' => 'fa fa-home',
                'href' => '/riset4/dashboard',
            ],
            [
                'menu' => 'Hasil Kajian',
                'icon' => 'fas fa-chart-pie',
                'href' => '#',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset4/dashboard/kajian1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset4/dashboard/kajian2',
                    ],
                ],
            ],
            [
                'menu' => 'Peta Tematik',
                'icon' => 'fas fa-map',
                'href' => '#',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        
                        'href' => '/riset4/dashboard/peta1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        
                        'href' => '/riset4/dashboard/peta2',
                    ],
                ],
            ],
            [
                'menu' => 'Tabel Dinamis',
                'icon' => 'fas fa-light fa-table',
                'href' => '/riset4/dashboard/tabeldinamis',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset4/dashboard/tabel1'
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset4/dashboard/tabel2'   
                    ]
                ]
            ],
            [
                'menu' => 'Tentang Riset 4',
                'icon' => 'fas fa-chevron-circle-left',
                'href' => '/riset4'
            ],
        ],

        'riset5' => 
        [
            [
                'menu' => 'Home',
                'icon' => 'fa fa-home',
                'href' => '/riset5/dashboard',
            ],
            [
                'menu' => 'Hasil Kajian',
                'icon' => 'fas fa-chart-pie',
                'href' => '#',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset5/dashboard/kajian1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset5/dashboard/kajian2',
                    ],
                ],
            ],
            [
                'menu' => 'Peta Tematik',
                'icon' => 'fas fa-map',
                'href' => '#',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajain 1',
                        
                        'href' => '/riset5/dashboard/peta1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        
                        'href' => '/riset5/dashboard/peta2',
                    ],
                ],
            ],
            [
                'menu' => 'Tabel Dinamis',
                'icon' => 'fas fa-light fa-table',
                'href' => '/riset5/dashboard/tabeldinamis',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/riset5/dashboard/tabel1'
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/riset5/dashboard/tabel2'   
                    ]
                ]
            ],
            [
                'menu' => 'Tentang Riset 5',
                'icon' => 'fas fa-chevron-circle-left',
                'href' => '/riset5'
            ],
        ],

        'umum' => 
        [
            [
                'menu' => 'Home',
                'icon' => 'fa fa-home',
                'href' => '/umum/dashboard',
            ],
            [
                'menu' => 'Hasil Kajian',
                'icon' => 'fas fa-chart-pie',
                'href' => '#',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/umum/dashboard/kajian1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/umum/dashboard/kajian2',
                    ],
                ],
            ],
            [
                'menu' => 'Peta Tematik',
                'icon' => 'fas fa-map',
                'href' => '#',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        
                        'href' => '/umum/dashboard/peta1',
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        
                        'href' => '/umum/dashboard/peta2',
                    ],
                ],
            ],
            [
                'menu' => 'Tabel Dinamis',
                'icon' => 'fas fa-light fa-table',
                'href' => '/umum/dashboard/tabeldinamis',
                'subMenu' => [
                    [
                        'subMenu' => 'Kajian 1',
                        'href' => '/umum/dashboard/tabel1'
                    ],
                    [
                        'subMenu' => 'Kajian 2',
                        'href' => '/umum/dashboard/tabel2'   
                    ]
                ]
            ],
            [
                'menu' => 'Tentang Bid. Umum',
                'icon' => 'fas fa-chevron-circle-left',
                'href' => '/umum'
            ],
        ],
    ];

    return $menu;
}

function getJudul()
{
    $judul = [
        // 'riset1' => [
        //     'judul' => 'Pengujian Hasil Prelist ST2023',
        //     'riset' => 'riset1',
        //     'href'  => '/riset1/dashboard',
        // ],
        // 'riset2' => [
        //     'judul' => 'Pemetaan Klasifikasi Lahan Pertanian dan Faktor-Faktor yang Mempengaruhi Alih Fungsi Lahan Pertanian',
        //     'riset' => 'riset2',
        //     'href'  => '/riset2/dashboard',
        // ],
        // 'riset3' => [
        //     'judul' => 'Kajian Pertanian Urban',
        //     'riset' => 'riset3',
        //     'href'  => '/riset3/dashboard',
        // ],
        // 'riset4' => [
        //     'judul' => 'Indeks Keberlanjutan Subsektor Tanaman Pangan (IKSTP)',
        //     'riset' => 'riset4',
        //     'href'  => '/riset4/dashboard',
        // ],
        // 'riset5' => [
        //     'judul' => 'Metodologi Sensus Pertanian Online',
        //     'riset' => 'riset5',
        //     'href'  => '/riset5/dashboard',
        // ],
        // 'umum' => [
        //     'judul' => 'Analisis Efektivitas Media Sosialisasi Survei dan Sensus Badan Pusat Statistik',
        //     'riset' => 'umum',
        //     'href'  => '/umum/dashboard',
        // ],

        'riset1' => [
            'judul' => 'Dashboard Riset 1',
            'riset' => 'riset1',
            'href'  => '/riset1/dashboard',
        ],
        'riset2' => [
            'judul' => 'Dashboard Riset 2',
            'riset' => 'riset2',
            'href'  => '/riset2/dashboard',
        ],
        'riset3' => [
            'judul' => 'Dashboard Riset 3',
            'riset' => 'riset3',
            'href'  => '/riset3/dashboard',
        ],
        'riset4' => [
            'judul' => 'Dashboard Riset 4',
            'riset' => 'riset4',
            'href'  => '/riset4/dashboard',
        ],
        'riset5' => [
            'judul' => 'Dashboard Riset 5',
            'riset' => 'riset5',
            'href'  => '/riset5/dashboard',
        ],
        'umum' => [
            'judul' => 'Dashboard Bidang Umum',
            'riset' => 'umum',
            'href'  => '/umum/dashboard',
        ],
    ];

    return $judul;
}

?>
