<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = ['id_buku', 'price', 'lunas', 'tanggal_pinjam', 'tanggal_kembali', 'deskripsi', 'id_member'];

    public function getMember(){
        return $this->hasOne('App\Model\Member');
    }

    public function getBook(){
        return $this->hasOne('App\Model\Book');
    }

}
