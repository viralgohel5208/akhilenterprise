<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model{
    use HasFactory;

    protected $table = 'header_data';
    protected $fillable = [
        'top_header_email','top_header_mobile_no','site_name', 'header_logo', 'header_menu_link', 'header_button_name', 'header_button_link'
    ];
}
