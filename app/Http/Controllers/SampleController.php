<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function category()
    {

        return response()->json([
            'categories' => [
                [
                    'name' => 'Mobiles & Tablets',
                    'image' => 'https://s2smyshop.s3.ap-south-1.amazonaws.com/aKJh2iFzZO7zuwhNpcAAocWM9C4VePM6.png',
                    'sub_category' => [
                        [
                            'name' => 'Mobiles Accessories',
                            'image' => 'https://s2smyshop.s3.ap-south-1.amazonaws.com/9mHO15jAewvIS1xRuZvjzv0ow7KYfosY.png',
                        ],
                        [
                            'name' => 'Tablets Accessories',
                            'image' => 'https://s2smyshop.s3.ap-south-1.amazonaws.com/89KcBT6SsWSohhtS79fxEhO3NduLfVqo.png',
                        ],
                        [
                            'name' => 'Mobiles Cases',
                            'image' => 'https://s2smyshop.s3.ap-south-1.amazonaws.com/v0YiLKD8wsdgQGSg7ktkQmM26hjD4Bmd.png',
                        ],
                        [
                            'name' => 'Mobiles',
                            'image' => 'https://s2smyshop.s3.ap-south-1.amazonaws.com/ilu6olqt4N9252hhqWHU1dRBCNd640fg.png',
                        ],
                        [
                            'name' => 'Tablets',
                            'image' => 'https://s2smyshop.s3.ap-south-1.amazonaws.com/1QXhq1zMX3ODDsQVgKtN7h9sGmsfG4ry.png',
                        ],
                    ],
                ]
            ]
        ]);
    }

    public function item()
    {
        return response()->json([
            'items' => [
                [
                    'title' => 'Apple iPhone 7 With FaceTime - 32GB, 4G LTE, Gold',
                    'description' => 'With all the fanfare surrounding the launch of apple iphone 7 the phone has finally made it to the market once again staying true to all the hype and expectations. the iphone 7 rose gold comes with the best battery life ever seen on an iphone and it will last two hours longer than the iphone 6s. apple iphone 7 features a new a10 fusion processor which is about 40 percent faster than previous models.',
                    'brand' => 'Apple',
                    'inventory' => 4,
                    'image' => 'https://s2smyshop.s3.ap-south-1.amazonaws.com/uEBNJDjSYLVgoZLT8vZ9FXCbuL59INu5.png',
                    'price' => 1000,
                    'google_product_category' => 267,
                    'google_product_type' => 'Consumer Electronic > Mobiles & Accessories > Mobiles',
                    'category' => 'Mobiles',
                ]
            ]
        ]);
    }
}
