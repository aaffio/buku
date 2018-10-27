<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table = 'buku';
	protected $fillable = ['judul', 'pencipta', 'penerbit', 'deskripsi', 'price', 'avaiable', 'status', 'gambar'];
        
}
