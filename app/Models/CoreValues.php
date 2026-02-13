<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoreValues extends Model{
    use HasFactory;

    protected $table = 'core_values';
    protected $fillable = [
        'heading', 'short_description', 'image', 'status'
    ];
}
