<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Api Tokens') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">


                <form method="POST" action="{{ route('generate-api-token') }}">
                    @csrf

                    <div class="flex flex-wrap items-stretch w-full mb-4 relative">
                        @if(auth()->user()->api_token)
                            <div class="block w-full my-3 bg-blue-200 text-blue-900 px-6 py-3 rounded">
                                <i class="bi bi-info-circle"></i> <strong>Before refreshing token</strong>

                                <ul class="list-decimal pl-4 mt-3">
                                    <li class="my-1">
                                        Once you refresh token, your old token will stop working instantly.
                                    </li>

                                    <li class="my-1">
                                        API rate limit is 30 requests / minute.
                                    </li>
                                </ul>
                            </div>
                        @endif
                        <input type="text"
                               id="api-token-input"
                               class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border h-10 border-grey-light rounded rounded-r-none px-3 relative"
                               value="{{ auth()->user()->api_token ?? null }}"
                               placeholder="Click the button below to generate new token" readonly>
                        <div class="flex -mr-px">
                            <span
                                class="flex items-center leading-normal bg-grey-lighter rounded rounded-l-none border border-l-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                <button id="api-token-input" type="button" data-clipboard-target="#api-token-input">
                                    <i class="bi bi-clipboard"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-button class="ml-3">
                            {{ auth()->user()->api_token ? __('Refresh API token') : __('Generate API Token') }}
                        </x-button>
                    </div>


                </form>


            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script type="text/javascript">
            window.onload = function (e) {
                var clipBoard = new ClipboardJS('#api-token-input');
            }
        </script>
    </x-slot>

</x-app-layout>
