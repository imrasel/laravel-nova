<?php

namespace App;

use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $casts = [
      'publish_at' => 'datetime', 
      'publish_until' => 'datetime'
    ];

    public function user() 
    {
      return $this->belongsTo(User::class);
    }
}
