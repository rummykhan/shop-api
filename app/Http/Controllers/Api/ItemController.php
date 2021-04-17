<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Structure\ApiResponse;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ItemController extends Controller
{
    public function __invoke(Request $request)
    {
        $results = $this->getItemBuilder($request)->paginate(20);

        return new ApiResponse($results);
    }

    protected function getItemBuilder(Request $request)
    {
        $builder = Item::query();

        $filterWithOperators = [
            'title' => 'like',
            'brand' => '=',
            'category' => '=',
            'price' => '>=',
            'google_product_category' => '=',
        ];

        $filters = $request->only(array_keys($filterWithOperators));

        if (empty($filters)) {
            return $builder;
        }

        foreach ($filters as $key => $value) {

            $builder->where($key,
                $filterWithOperators[$key],
                ($filterWithOperators[$key] == 'like' ? '%' . $value . '%' : $value)
            );

        }

        return $builder;
    }
}
