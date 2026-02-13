<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model{
    use HasFactory;

    protected $table = 'about_us';
    protected $fillable = [
        'intro_content', 'intro_image', 'heading', 'pre_heading', 'description', 'image', 'button_name', 'button_link', 'infra_heading', 'infra_pre_heading', 'page_title', 'seo_title', 'seo_description', 'banner_image'
    ];
}
