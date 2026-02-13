<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCatalog extends Model{
    use HasFactory;

    protected $table = 'request_catalog';
    protected $fillable = [
        'first_name','last_name','email', 'phone_number'
    ];
}
