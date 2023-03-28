<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image_id'];

    public function image(): HasOne
    {
        return $this->hasOne(Image::class,'id');
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
