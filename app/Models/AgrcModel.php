<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgrcModel extends Model
{
    use HasFactory;

    protected $table = 'agrc';

    protected $fillable = [
        'id',
        'ukm',
        'pengurus',
        'jabatan',
        'created_at',
        'update_at'
    ];
}
