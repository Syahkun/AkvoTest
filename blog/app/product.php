<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    // ngasih tahu perubahan tabel yg digunakan
    // protected $table = 'mahasiswa';
    //klau pkai fillable ini boleh diisi
    //klau pkai guard ini yg nggak boleh diisi
    // use SoftDeletes;
    // protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
}
