<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{

    protected $table    = "log_activity";

    protected $fillable = [
        'log_user_id', 'log_datetime', 'log_desc'
    ];

    use HasFactory;
}