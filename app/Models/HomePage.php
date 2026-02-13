<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model{
    use HasFactory;

    protected $table = 'home_page';
    protected $fillable = [
        'heading', 'pre_heading', 'description', 'image', 'button_name', 'button_link', 'product_heading', 'product_pre_heading', 'infra_heading', 'infra_pre_heading', 'page_title', 'seo_title', 'seo_description', 'infra_image'
    ];
}
