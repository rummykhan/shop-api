@extends('layouts.app')

@section('content')

    <div class="container jumbotron my-4">
        <h1 class="display-4">Hi There!</h1>
        <p class="lead">This is a simple, easy to use and free Shop API, It can serve you json for different
            categories,
            items with images and also google product category.</p>
    </div>

    <div class="bg-light my-3">
        <div class="container block py-3">
            <h1 class="text-primary text-center">Features</h1>
            <hr>

            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <h4 class="text-secondary">Categories</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Name</li>
                        <li class="list-group-item">Image</li>
                        <li class="list-group-item">Subcategory</li>
                        <li class="list-group-item">Image S3 Url</li>
                        <li class="list-group-item">JSON format</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h4 class="text-secondary">Items</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Item Title & Description</li>
                        <li class="list-group-item">Brand (37% available)</li>
                        <li class="list-group-item">Inventory availability</li>
                        <li class="list-group-item">Original & Discounted Price</li>
                        <li class="list-group-item">google_product_type & google_product_category (90% accurate)</li>
                        <li class="list-group-item">Category</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container block my-3">
        <h1 class="text-primary text-center">Structure</h1>
        <hr>

        <div class="row mt-3">
            <div class="col-sm-12">

                <h4 class="text-secondary">Category</h4>

                <pre>
                    <code class="language-json">
{
    "name": "Mobiles & Tablets",
    "image": "https://s2smyshop.s3.ap-south-1.amazonaws.com/aKJh2iFzZO7zuwhNpcAAocWM9C4VePM6.png",
    "sub_category": [
        {
            "name": "Mobiles Accessories",
            "image": "https://s2smyshop.s3.ap-south-1.amazonaws.com/9mHO15jAewvIS1xRuZvjzv0ow7KYfosY.png"
        },
        {
            "name": "Tablets Accessories",
            "image": "https://s2smyshop.s3.ap-south-1.amazonaws.com/89KcBT6SsWSohhtS79fxEhO3NduLfVqo.png"
        }
    ]
}
</code>
                </pre>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12">
                <h4 class="text-secondary">Items</h4>
                <pre>
                    <code class="language-json">
{
    "title": "Apple iPhone 7 With FaceTime - 32GB, 4G LTE, Gold",
    "description": "With all the fanfare surrounding the launch of apple iphone 7 the phone has finally made it to the market once again staying true to all the hype and expectations. the iphone 7 rose gold comes with the best battery life ever seen on an iphone and it will last two hours longer than the iphone 6s. apple iphone 7 features a new a10 fusion processor which is about 40 percent faster than previous models.",
    "brand": "Apple",
    "inventory": 4,
    "image": "https://s2smyshop.s3.ap-south-1.amazonaws.com/uEBNJDjSYLVgoZLT8vZ9FXCbuL59INu5.png",
    "original_price": 2758,
    "discounted_price": 490,
    "google_product_category": 267,
    "google_product_type": "Consumer Electronic > Mobiles & Accessories > Mobiles",
    "category": "Mobiles"
}
                        </code>

                </pre>
            </div>
        </div>
    </div>

@endsection
