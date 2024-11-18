<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
    'name',
    'slug',
    'avatar',
    'occupation',
    ];
    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
