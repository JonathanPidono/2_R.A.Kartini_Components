<?php

namespace App\Http\Controllers;

class BlogController extends Controller{
    public function blog(){
        $pencapaian = [
            [
                'Judul' => 'Mendobrak Tradisi Pingitan Kolonial',
                'Tanggal' => '1892-1903',
                'Deskripsi' => 'Menjadi salah satu perempuan bangsawan Jawa pertama yang berani mengkritik adat pingitan, poligami, dan kawin paksa melalui pemikiran kritisnya.',
            ],
            [
                'Judul' => 'Membuka Jaringan Korespondensi Internasional',
                'Tanggal' => '1899-1904',
                'Deskripsi' => 'Berhasil membangun jaringan komunikasi dengan para intelektual dan aktivis  pergerakan di Belanda (seperti Rosa Abendanon dan Stella Zeehandelaar) untuk  menyuarakan kondisi perempuan pribumi.',
            ],
            [
                'Judul' => 'Mendirikan Sekolah Wanita Pertama',
                'Tanggal' => '1903',
                'Deskripsi' => 'Berhasil mendirikan sekolah khusus perempuan di Jepara (sebelum menikah) dan di Rembang dengan dukungan suaminya, yang mengajarkan baca-tulis, kerajinan tangan, dan budi pekerti.',
            ],
            [
                'Judul' => 'Mengenalkan Ukiran Jepara ke Dunia',
                'Tanggal' => '1898-1904',
                'Deskripsi' => 'Membantu mempromosikan dan menjual kerajinan ukiran kayu karya pengrajin lokal Jepara ke Batavia hingga Belanda, sehingga menaikkan taraf ekonomi para pengrajin pada masa itu.  ',
            ],
            [
                'Judul' => 'Penerbitan Buku Monumental ',
                'Tanggal' => '1911',
                'Deskripsi' => 'Pemikiran-pemikirannya berhasil dibukukan oleh J.H. Abendanon dengan judul Door Duisternis tot Licht (1911), yang kemudian diterjemahkan oleh Armijn Pane menjadi buku legendaris "Habis Gelap Terbitlah Terang" (1922). Buku ini menjadi pemicu bangkitnya gerakan perempuan di Indonesia. ',
            ],
            [
                'Judul' => 'Penyebaran Sekolah Kartini secara Masif',
                'Tanggal' => '1912',
                'Deskripsi' => 'Inspirasi perjuangannya mendorong keluarga Van Deventer mendirikan Yayasan Kartini pada tahun 1912, yang kemudian berhasil membangun Sekolah Kartini di berbagai kota besar seperti Semarang, Batavia, Surabaya, Yogyakarta, Malang, hingga Madiun.  ',
            ],
            [
                'Judul' => 'Gelar Pahlawan Nasional Indonesia',
                'Tanggal' => '1964',
                'Deskripsi' => 'Secara resmi dianugerahi gelar Pahlawan Kemerdekaan Nasional oleh Presiden Soekarno melalui Keputusan Presiden RI No. 108 Tahun 1964. ',
            ],
            [
                'Judul' => ' Penetapan Hari Nasional ',
                'Tanggal' => '1964',
                'Deskripsi' => 'Hari lahirnya, 21 April, ditetapkan secara resmi sebagai Hari Kartini yang diperingati secara nasional setiap tahun di Indonesia untuk merayakan emansipasi wanita.',
            ],
        ];

        return view('blog', ['Pencapaian' => $pencapaian]);
    }
}