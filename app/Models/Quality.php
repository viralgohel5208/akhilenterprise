<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quality extends Model{
    use HasFactory;

    protected $table = 'quality';
    protected $fillable = [
        'heading', 'description', 'image', 'banner_image', 'seo_title', 'seo_description', 'page_title'
    ];
}
