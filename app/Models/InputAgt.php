<?php

namespace App\Models;

class InputAgt 
{
//    private static  $input_all = [
//         [
//             "no" => "1",
//             "nama_instansi" => "Gunadarma",
//             "nama_tim" => "Apa aja",
//             "status" => "Lulus"
//         ],
//         [
//             "no" => "2",
//             "nama_instansi" => "Gunadarma",
//             "nama_tim" => "Mantap jiwa",
//             "status" => "Lulus"
//         ],

//     ];

    private static $input_all = [
        [
            "no" => 1,
            "instansi" => "Gundar",
            "nama_tim" => "Negative",
            "slug" => "negative",
            "ketua" => "Apa ja",
            "id_line" => "1234dsd",
            "no_hp" => "0877621212",
            "email" => "imamabdul@gmail.com",
            "pembayaran" => "lunas",
            "berkas" => "lulus",
            "status" => "Lulus"
        ],

        [
            "no" => 2,
            "instansi" => "Gunadarma",
            "nama_tim" => "Negative mantap",
            "slug" => "negative-mantap",
            "ketua" => "Apa ja",
            "id_line" => "1234dsd",
            "no_hp" => "087761212",
            "email" => "imamabdul@gmail.com",
            "pembayaran" => "lunas",
            "berkas" => "lulus",
            "status" => "Lulus"
        ]
    ];

    private static   $input_agt = [
        [
            "agt_tim" => "Ucupnya",
            "slug" => "negative",
            "no_hp" => "0877621212",
            "email" => "imamabdul@gmail.com",
        ],
        [
            "agt_tim" => "Amin",
            "slug" => "negative",
            "no_hp" => "0877621212121",
            "email" => "imama@gmail.com",
        ],

        [
            "agt_tim" => "Asep",
            "slug" => "negative-mantap",
            "no_hp" => "087761212",
            "email" => "imamabdul@gmail.com",
        ],
        [
            "agt_tim" => "Abdul",
            "slug" => "negative-mantap",
            "no_hp" => "087761212",
            "email" => "imam@gmail.com",
        ]
    ];


    public static function semua()
    {
        return collect(self::$input_all);
    }

    public static function cp()
    {
        return collect(self::$input_all);
    }

    

    public static function tim()
    {
        return static::semua();
    }


    public static function find($slug)
    {
        $anggota = collect(self::$input_agt);
       
        $slug_agt = $anggota->where('slug', $slug);
        return $slug_agt->all();
    }
}
