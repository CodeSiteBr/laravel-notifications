<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id', 'user_id', 'title', 'body',
    ];

    /**
     * Relacionamento muitos para um
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Relacionamento muitos para um
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
