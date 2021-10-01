<?php

class Mahasiswa_model {
    private $mhs = [
        [
            "nama" => "David bhisma laksana",
            "nrp" => "173040056",
            "email" => "david@gmail.com",
            "jurusan" => "teknik informatika"
        ],
        [
            "nama" => "reggy Nugraha",
            "nrp" => "173040068",
            "email" => "reggy@gmail.com",
            "jurusan" => "teknik mesin"
        ],
        [
            "nama" => "wildan Fauzi",
            "nrp" => "173040035",
            "email" => "wildan@gmail.com",
            "jurusan" => "teknik industri"
        ]
    ];



    public function getAllMahasiswa() {
       return $this->mhs;
    }
}