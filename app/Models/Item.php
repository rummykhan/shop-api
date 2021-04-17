<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 * @package App\Models
 *
 * @property int $id
 *
 * @property string $title
 * @property string $description
 * @property integer $inventory
 * @property string $image
 * @property float $original_price
 * @property float $discounted_price
 * @property int $google_product_category
 * @property string $google_product_type
 * @property string $category
 *
 * @property string $created_at
 * @property string $updated_at
 */
class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'title',
        'description',
        'inventory',
        'image',
        'price',
        'google_product_category',
        'google_product_type',
        'category',
    ];
}
