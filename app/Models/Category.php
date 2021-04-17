<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $parent_id
 * @property string $created_at
 * @property string $updated_at
 */
class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
