<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'namagroup',
        'namemember',
        'email1',
        'whatsapp1',
        'line1',
        'github1',
        'place1',
        'date1',
        'cv1',
        'card1',
        // 'verify',
    ];
}
