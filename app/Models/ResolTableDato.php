<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResolTableDato extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'resol_tabla_dato';

    protected $fillable = [
        'tabla_id',
        'perdesde',
        'perhasta',
        'paramstr',
        'param1',
        'param2',
        'param3',
        'param4',
        'param5',
        'fchmod',
        'usrmod',
        'param6',
        'obs',
    ];

    protected $dates = ['fchmod', 'deleted_at'];
}


