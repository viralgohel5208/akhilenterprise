<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSettings extends Model{
    use HasFactory;

    protected $table = 'general_setting';
    protected $fillable = [
        'description', 'email', 'phone_number', 'address', 'facebook_link', 'instagram_link', 'linkedin_link'
    ];
}
