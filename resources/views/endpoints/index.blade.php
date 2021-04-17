<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Endpoints') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

                <div class="card px-2 py-2">

                    <div class="card-header flex bg-blue-100 px-3 py-4 rounded">
                        <div class="md:w-1/12 sm:w-3/12">
                            Categories
                        </div>
                        <div class="md:w-11/12 sm:w-9/12 border-l border-gray-800 px-3">
                            <a href="{{ route('api-categories', ['api-token' => auth()->user()->api_token]) }}" target="blank">
                                {{ route('api-categories', ['api-token' => auth()->user()->api_token]) }} <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>

                    <table class="min-w-full">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Param</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Type</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">api_token</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">GET</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">User api token</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">page</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">GET</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">(Optional) page parameters int, to navigate to pages</td>
                        </tr>

                        </tbody>
                    </table>

                </div>

                <div class="card px-2 py-2 mt-5 pt-5">

                    <div class="card-header flex bg-blue-100 px-3 py-4 rounded">
                        <div class="md:w-1/12 sm:w-3/12">
                            Items
                        </div>
                        <div class="md:w-11/12 sm:w-9/12 border-l border-gray-800 px-3">
                            <a href="{{ route('api-items', ['api-token' => auth()->user()->api_token]) }}" target="blank">
                                {{ route('api-items', ['api-token' => auth()->user()->api_token]) }} <i class="bi bi-link-45deg"></i>
                            </a>
                        </div>
                    </div>

                    <table class="min-w-full">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Param</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Type</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">api_token</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">GET</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">User api token</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">page</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">GET</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">(Optional) page parameters int, to navigate to pages</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">category</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">GET</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">(Optional, String) category parameters to filter items by category</td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">title</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">GET</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">(Optional, String) title parameters to filter items by similar title</td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">brand</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">GET</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">(Optional, String) brand parameters to filter items by brands</td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">price</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">GET</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">(Optional, Integer) price parameters to filter items by price >= </td>
                        </tr>

                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">google_product_category</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">GET</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">(Optional, Integer) Google product category to filter items</td>
                        </tr>
                        </tbody>
                    </table>

                </div>


            </div>
        </div>

    </div>

</x-app-layout>
