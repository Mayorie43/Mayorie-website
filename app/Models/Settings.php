<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $fillable = [
        'app_name',
        'student_id_prefix',
        'logo',
        'favicon',
        'copyright_text',
        'meta_image',
        'meta_description'
    ];

}
