<?php

namespace App\Modules\Feedback\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';

    protected $fillable = [
        'lastname',
        'firstname',
        'email',
        'mobile',
        'city_id',
        'theme',
        'message',
        'userfile'
    ];
}
