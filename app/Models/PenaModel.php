<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenaModel extends Model
{
    use HasFactory;

    protected $table = 'pena';

    protected $fillable = [
        'id',
        'ukm',
        'pengurus',
        'jabatan',
        'created_at',
        'update_at'
    ];
}