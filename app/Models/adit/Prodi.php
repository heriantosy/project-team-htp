<?php

namespace App\Models\adit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 't_prodi_adit';
    protected $primaryKey = 'prodi_id';
    protected $keyType = 'string';
}
