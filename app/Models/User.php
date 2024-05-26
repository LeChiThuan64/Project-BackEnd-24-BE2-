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
    protected $attributes = [
        'is_active' => 0,
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'email', 'password', 'userType', 'is_active'];
    // Trong app/Models/User.php
    public function isAdmin()
    {
        return $this->userType === 1; // Giả sử userType = 1 là Admin
    }

    public function roleDescription()
    {
        return $this->isAdmin() ? 'Admin' : 'User';
    }


    // App\Models\User.php

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }


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
    public function getAllUsers(){
        return User::all();
    }
    public function getUserBuyProduct(){
        $users = User::join('bills', 'users.id', '=', 'bills.user_id')
        ->select('users.id', User::raw('SUM(bills.total) as total'))
        ->groupBy('users.id')
        ->get();
      return $users;
    }
  
    
}
