<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificates extends Model{
    use HasFactory;

    protected $table = 'certificates';
    protected $fillable = [
        'heading', 'short_description', 'image', 'status'
    ];
}
