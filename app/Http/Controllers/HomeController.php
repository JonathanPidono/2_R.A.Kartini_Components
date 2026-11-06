<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
    public function home(){
        $description =  [
                'Raden Ajeng Kartini (1879–1904) bukan sekadar pahlawan nasional, ia adalah pelopor 
gerakan emansipasi wanita di Indonesia. Di tengah kungkungan tradisi pingitan kolonial, Kartini 
membuktikan bahwa ruang gerak yang terbatas tidak mampu memenjarakan pemikiran kritis. 
Senjata utama Kartini adalah literasi. Melalui korespondensi surat dengan 
sahabat-sahabatnya di Eropa, ia menyuarakan gugatan terhadap ketimpangan sosial dan 
memperjuangkan hak pendidikan bagi perempuan pribumi. Kumpulan pemikirannya yang 
dibukukan dalam "Habis Gelap Terbitlah Terang" menjadi cetak biru bagi gerakan kesetaraan 
gender di tanah air.  
Di era digital saat ini, warisan Kartini bertransformasi menjadi pengingat penting: bahwa 
kebebasan akses informasi harus disikapi dengan bijak. Meneladani Kartini modern berarti 
menggunakan suara kita untuk mengedukasi, terus belajar tanpa batas, dan saling mendukung 
demi kemajuan bersama.'
        ] ;
        return view('home', ['description' => $description]);

    }
}