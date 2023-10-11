<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'published_at'];

    public function attachment() : HasOne {
        return $this->hasOne(Attachment::class);
    }

    public function comments() : HasMany {
        return $this->hasMany(Comment::class);
    }
}
