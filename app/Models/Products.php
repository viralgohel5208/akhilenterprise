<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'category_id', 'product_title', 'product_slug', 'short_description', 'main_description', 'product_image', 'product_banner_image', 'product_status', 'seo_title', 'seo_description'
    ];

    public function category(){
        return $this->belongsTo(ProductCategory::class);
    }
}
