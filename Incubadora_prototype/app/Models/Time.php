<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'form1_start',
        'form1_end',
        'form2_start',
        'form2_end',
        'form3_start',
        'form3_end',
        'form4_start',
        'form4_end',
        'form5_start',
        'form5_end',
        'form6_start',
        'form6_end',
        'form7_start',
        'form7_end'
    ];
}
