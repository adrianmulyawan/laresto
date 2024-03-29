<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function organization()
    {
        return $this->hasOne(Organization::class);
    }

    public function advantages()
    {
        return $this->hasMany(Advantage::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function banners()
    {
        return $this->hasMany(Banner::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
}
