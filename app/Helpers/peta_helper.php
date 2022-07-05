<?php 

function getPeta() 
{
    $peta = [
        '1' => 
        [
            'id' => '1',
            'nama' => 'Peta Umum Perubahan Lahan Bandung Barat',
            'generate' => 'assets/peta_umum/bandung_barat/js/peta_umum_bandung_barat.js',
            'data' => 'assets/peta_umum/bandung_barat/data/bandung_barat.js'
        ],
        '2' => 
        [
            'id' => '2',
            'nama' => 'Peta Umum Perubahan Lahan Purwakarta',
            'generate' => 'assets/peta_umum/purwakarta/js/peta_umum_purwakarta.js',
            'data' => 'assets/peta_umum/purwakarta/data/purwakarta.js'
        ],
        '3' => 
        [
            'id' => '3',
            'nama' => 'Peta Khusus Perubahan Lahan Bandung Barat',
            'generate' => 'assets/peta_khusus/bandung_barat/js/peta_khusus_bandung_barat.js',
            'data' => 'assets/peta_khusus/bandung_barat/data/bandung_barat.js'
        ],
        '4' => 
        [
            'id' => '4',
            'nama' => 'Peta Khusus Perubahan Lahan Purwakarta',
            'generate' => 'assets/peta_khusus/purwakarta/js/peta_khusus_purwakarta.js',
            'data' => 'assets/peta_khusus/purwakarta/data/purwakarta.js'
        ],
        '5' => 
        [
            'id' => '5',
            'nama' => 'Peta Klasifikasi Tutupan Lahan 2021 Sentinel-2 Lokus Bandung Barat',
            'generate' => 'assets/peta_klasifikasi/bandung_barat/js/peta_klasifikasi_bandung_barat.js',
            'data' => 'assets/peta_klasifikasi/bandung_barat/data/bandung_barat.js'
        ],
        '6' => 
        [
            'id' => '6',
            'nama' => 'Peta Klasifikasi Tutupan Lahan 2021 Sentinel-2 Lokus Purwakarta',
            'generate' => 'assets/peta_klasifikasi/purwakarta/js/peta_klasifikasi_purwakarta.js',
            'data' => 'assets/peta_klasifikasi/purwakarta/data/purwakarta.js'
        ],
        '7' => 
        [
            'id' => '7',
            'nama' => 'Laju Alih Fungsi Lahan Bandung Barat',
            'generate' => 'assets/peta_laju/bandung_barat/map-laju-bb.js',
            'data' => '',
        ],
        '8' => 
        [
            'id' => '8',
            'nama' => 'Laju Alih Fungsi Lahan Purwakarta',
            'generate' => 'assets/peta_laju/purwakarta/map-laju-pwk.js',
            'data' => '',
        ],
        '9' => 
        [
            'id' => '9',
            'nama' => 'Estimasi Luas Sawah Tahun 2021 Lokus Bandung Barat',
            'generate' => 'assets/peta_luas_sawah/bandung_barat/peta-luas-bb.js',
            'data' => '',
        ],
        '10' => 
        [
            'id' => '10',
            'nama' => 'Estimasi Luas Sawah Tahun 2021 Lokus Purwakarta',
            'generate' => 'assets/peta_luas_sawah/purwakarta/peta-luas-pwk.js',
            'data' => '',
        ],
        '11' => 
        [
            'id' => '11',
            'nama' => 'Persentase (%) Laju Alih Fungsi Lahan Sawah Tahunan<br>Kabupaten Bandung Barat dan Kabupaten Purwakarta Tahun 2013-2021',
            'generate' => 'assets/peta_tematik_gab/peta-y-gab.js',
            'data' => '',
        ],
        '12' => 
        [
            'id' => '12',
            'nama' => 'Peta Klaster LISA Laju Alih Fungsi Lahan Sawah Tahunan<br>Kabupaten Bandung Barat dan Kabupaten Purwakarta',
            'generate' => 'assets/peta_lisa_laju/peta-lisa-laju.js',
            'data' => ''
        ],
        '13' => 
        [
            'id' => '13',
            'nama' => 'Bivariate Choropleth<br>Rasio Fasilitas Kesehatan 2021&#8212;Persentase Laju Alih Fungsi Lahan Sawah Tahunan',
            'generate' => 'assets/bivariate_choropleth/y1-x5/js/y1-x5.js',
            'data' => ''
        ],
        '14' => 
        [
            'id' => '14',
            'nama' => 'Bivariate Choropleth<br>Ketinggian Wilayah 2021&#8212;Persentase Laju Alih Fungsi Lahan Sawah Tahunan',
            'generate' => 'assets/bivariate_choropleth/y1-x6/js/y1-x6.js',
            'data' => ''
        ],
        '15' => 
        [
            'id' => '15',
            'nama' => 'Bivariate Choropleth<br>Persentase Laju Pertumbuhan Penduduk&#8212;Persentase Laju Alih Fungsi<br>Lahan Sawah Tahunan',
            'generate' => 'assets/bivariate_choropleth/y1-x12/js/y1-x12.js',
            'data' => ''
        ]
        // '16' => 
        // [
        //     'id' => '16',
        //     'nama' => 'Peta Bivariate Choropleth Perubahan Kepadatan Penduduk <br> dan Laju Alih Fungsi Rata-Rata Tahunan',
        //     'generate' => 'assets/bivariate_choropleth/y2-x1/js/y2-x1.js',
        //     'data' => ''
        // ]
    ];

    return $peta;
}

?>