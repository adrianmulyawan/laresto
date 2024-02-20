<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'banner_name',
        'banner_image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
