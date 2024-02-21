<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'price',
        'image_header',
        'image_package',
        'description',
        'simple_description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
