<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = $this->getCategories();

        $progressBar = $this->command->getOutput()->createProgressBar(count($categories));

        foreach ($categories as $category) {

            $this->addCategory($category);

            $progressBar->advance(1);
        }

        $progressBar->finish();
        $this->command->line("");
    }

    protected function getCategories()
    {
        return json_decode(file_get_contents("https://raw.githubusercontent.com/rummykhan/ecommerce-catalog/master/categories.json"), true);
    }

    protected function addCategory($category, $parentCategory = null)
    {
        $model = new Category();
        $model->name = $category['name'];
        $model->image = $category['image'];
        $model->parent_id = $parentCategory ? $parentCategory->id : null;
        $model->save();

        if (!isset($category['sub_category'])) {
            return;
        }

        foreach ($category['sub_category'] as $subCategory) {
            $this->addCategory($subCategory, $model);
        }
    }
}
