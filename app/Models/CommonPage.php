<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonPage extends Model{
    use HasFactory;

    protected $table = 'common_page';
    protected $fillable = [
        'page_name', 'page_slug', 'page_type', 'page_banner_image', 'seo_title', 'seo_description'
    ];
}
