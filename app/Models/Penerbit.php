<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $table = 'penerbit';
protected $primaryKey = 'penerbit_id';
public $incrementing = false;
public $timestamps = false;
protected $fillable = [
'penerbit_id',
'penerbit_nama',
'penerbit_alamat',
'penerbit_notelp',
'penerbit_email',
];

protected static function createPenerbit ($data)
{
return self::create($data);
}
}
