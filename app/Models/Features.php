<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Features extends Model  
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'tbl_features';

    protected $fillable = [
        'feature_name',
        'description',
    ];
}
