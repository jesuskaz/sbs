<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'image_id',
    ];

    public function categorie(): BelongsTo

    {
        return $this->belongsTo(Category::class, 'id');
    }

    public function image(): HasOne
    {
        return $this->hasOne(Image::class, 'id');
    }
}
