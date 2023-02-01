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
    ];
}
class Product {
    private string $productTitle = "title";
    private int $price = 0;
    private string $description = "";

    public function __construct(string $productTitle,int $price,string $description){
        $this->productTitle = $productTitle;
        $this->price = $price;
        $this->description = $description;
    }

    public function getProductTitle(){
       return $this ->productTitle;
    }
    public function getPrice(){
        return $this ->price;
    }
    public function getDescription(){
     return $this ->description;
     }
}