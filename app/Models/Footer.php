<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model{
    use HasFactory;

    protected $table = 'footer_data';
    protected $fillable = [
        'footer_description','footer_logo','footer_menu', 'footer_product', 'copyright_text'
    ];
}
