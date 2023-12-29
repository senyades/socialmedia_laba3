<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Post; // Убедитесь, что у вас правильно указан путь к модели Post

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // ...

    protected $fillable = [
        'name',
        'email',
        // Добавьте другие поля, если необходимо
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
}
