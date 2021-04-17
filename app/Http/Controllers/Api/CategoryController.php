<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Structure\ApiResponse;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke(Request $request)
    {
        $results = Category::with([
            'subCategories'
        ])->paginate(20);

        return new ApiResponse($results);
    }
}
