<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use softDeletes;
    
    protected $fillable = ['title', 'description', 'user_id'];
    protected $guardede = ['img'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this-> hasMany(Comment::class);
    }
}
