<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ProductBrand extends Model
{  
    //
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'photo',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'brand_id');
    }

    public function popularProducts()
    {
        return $this->hasMany(Product::class, 'brand_id')
                    ->where('is_popular', true)
                    ->orderBy('created_at', 'desc');
    }
}
