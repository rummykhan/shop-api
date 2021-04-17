<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = $this->getItems();

        $progressBar = $this->command->getOutput()->createProgressBar(count($items));

        foreach ($items as $item) {

            $this->addItem($item);

            $progressBar->advance();
        }

        $progressBar->finish();
        $this->command->line("");
    }

    public function addItem($item)
    {
        $model = new Item();
        $model->fill($item);
        $model->category = $item['category'] ?? 'Other';
        $model->save();
    }


    public function getItems()
    {
        return json_decode(file_get_contents("https://raw.githubusercontent.com/rummykhan/ecommerce-catalog/master/items.json"), true);
    }
}
