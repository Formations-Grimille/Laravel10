<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\ProductCategory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['sku', 'name', 'description', 'price', 'rate', 'stock', 'product_category'];

    public function productCategory() : BelongsTo {
        return $this->belongsTo(ProductCategory::class);
    }
}
