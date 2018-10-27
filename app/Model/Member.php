<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = ['nama', 'alamat', 'telepon', 'email', 'total_pinjam', 'total_kembali'];

}
