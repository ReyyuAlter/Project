<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LdkModel extends Model
{
    use HasFactory;

    
    protected $table = 'ldk';

    protected $fillable = [
        'id',
        'ukm',
        'pengurus',
        'jabatan',
        'created_at',
        'update_at'
    ];
}
