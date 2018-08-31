<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'body',
    ];

    /**
     * Relacionamento um para muitos
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Author post
     * Relacionamento muitos para um
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
