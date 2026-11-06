<?php

namespace App\Http\Controllers;

class AboutController extends Controller{
    public function about(){
        $content = [
            [
                'Halaman' => 'About',
                'Fungsi' => 'Untuk menampilkan informasi terkait website berisi content, teknologi, dan pembuat.',
            ],
            [
                'Halaman' => 'Blog',
                'Fungsi' => 'Untuk menampilkan pencapaian semasa hidup dan pasca wafat tokoh.',
            ],
            [
                'Halaman' => 'Home',
                'Fungsi' => 'Untuk menampilkan biodata atau portofolio singkat terkait R.A. Kartini.',
            ],
        ];

        $teknologi = [
            [
                'Teknologi' => 'Tailwind CSS',
                'Fungsi' => 'Untuk membantu proses pembuatan layout, components dan tipografi.',
            ],
            [
                'Teknologi' => 'Laravel',
                'Fungsi' => 'Berguna membantu proses pembuatan lebih mudah dan terstruktur.',
            ],
            [
                'Teknologi' => 'daisyUI',
                'Fungsi' => 'Sebagai template tailwind seperti header, footer, dan card.',
            ],
        ];

        $pembuat = [
            [
                'Nama' => 'Evelyn Tjandinegara',
                'Nim' => '2086022510001',
            ],
            [
                'Nama' => 'Jonathan Mathew Pidono',
                'Nim' => '2086022510008',
            ],
        ];
        return view('about', ['Content' => $content, 'Teknologi'=> $teknologi, 'Pembuat'=> $pembuat]);
    }
}