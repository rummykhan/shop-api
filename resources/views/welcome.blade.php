<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ env('APP_NAME') }}</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/shop-logo.png') }}"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-4 sm:justify-start sm:pt-0">
            <x-application-home-logo/>
        </div>

        <div class="mt-4 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

            <div class="grid grid-cols-1">
                <div class="p-6">
                    <div class="flex items-center">

                        <i class="bi bi-list-nested"></i>

                        <div class="ml-4 text-lg leading-7 font-semibold">
                            Features
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            A collection of products from various sources made available in form of JSON for anyone to
                            use, play and contribute. It resemble completely real data, so you can do a lot of tests on
                            it.
                            It contains 2 tables, Categories & Items, more details are as follows.
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-2">

                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <i class="bi bi-tag"></i>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            Categories
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Categories table contains name, images and subcategory tree.

                            <div class="block mt-3">
                                <x-button-link href="{{ route('category-sample') }}">
                                    View Sample
                                </x-button-link>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                    <div class="flex items-center">
                        <i class="bi bi-box"></i>
                        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                            Items
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Item table has item title, description, brand, inventory, image S3 Url, original price,
                            discounted price, google_product_category, google_product_type and category.

                            <div class="block mt-3">
                                <x-button-link href="{{ route('item-sample') }}">
                                    View Sample
                                </x-button-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1">

                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <i class="bi bi-star"></i>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            Free
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            This is absolutely free, you can use it however you see fit. But don't use it in production,
                            maybe description / fields are outdated.
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1">

                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <i class="bi bi-card-checklist"></i>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            How to Use
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">

                            <ul class="list-disc">
                                <li>Register by visiting <a href="{{ route('register') }}" class="underline">Register</a></li>
                                <li>Generate an API Token</li>
                                <li>Start making HTTP requests keeping rate limit in mind</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">


            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</div>
</body>
</html>
