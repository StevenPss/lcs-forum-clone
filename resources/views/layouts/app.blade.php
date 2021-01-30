<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />
        <style>
            .search-form {
                background-image: url('https://laracasts.com/images/icons/search.svg');
                background-repeat: no-repeat;
                background-position: 16px 13.5px;
                padding-left: 20px;
            }
        </style>
        
        @yield('css')

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')
            <!-- Page Content -->
            <div class="py-12">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-4">

                        <div class="flex flex-col flex-col-reverse md:flex-row mx-auto" style="max-width: 1070px;">
                            <x-sidebar/>
                            <x-modal/>
                        </div>
                    
                        <!--forum main-->
                        <div class="col-span-3">
                            <!--dropdown, views & search-->
                                <div class="flex justify-between mb-8">
                                    <div>
                                        <div class="relative inline-block text-left">
                                            <div>
                                                <button id="btn-forum-latest" type="button" class="inline-flex justify-center w-full rounded-full border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="options-menu" aria-haspopup="true" aria-expanded="true">
                                                    Latest
                                                    <!-- Heroicon name: chevron-down -->
                                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                            
                                            <div id="forum-menu-latest" class="hidden origin-top-left absolute left-0 border mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                                                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Latest</a>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Popular This Week</a>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Popular All Time</a>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Solved</a>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Unsolved</a>
                                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">No Replies Yet</a>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="relative inline-block text-left">
                                            <div>
                                                <button id="btn-forum-all" type="button" class="ml-3 inline-flex justify-center w-full rounded-full border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="options-menu" aria-haspopup="true" aria-expanded="true">
                                                    All
                                                    <!-- Heroicon name: chevron-down -->
                                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                        
                                            <div id="forum-menu-all" class="hidden origin-top-left absolute left-0 mt-2 w-32 border overflow-y-auto h-96 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                                                <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                                    @foreach ($channels as $channel)
                                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">{{ $channel->name }}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                    
                                    </div>
                    
                    
                                    <div class="flex">
                    
                                        <button id="btn-content-hide" class="focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="mx-2"><g fill="#78909C" fill-rule="evenodd"><rect width="15" height="6" rx="2"></rect> <rect width="15" height="6" y="9" rx="2"></rect></g></svg></button>
                    
                                        <button id="btn-content-show" class="ml-2 bg-gray-200 py-1 px-1 rounded focus:outline-none"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="mx-2"><g fill="#78909C" fill-rule="evenodd"><rect width="15" height="4" rx="2"></rect> <rect width="8" height="4" y="11" rx="2"></rect> <rect width="15" height="4" y="5.5" rx="2"></rect></g></svg></button>
                    
                                        <form action="" autocomplete="off" class="ml-4 search-form bg-gray-200 rounded-full hidden md:block md:w-52 hidden">
                                            <input name="q" placeholder="Whatcha Looking For?" value="" class="bg-transparent px-5 pt-0 text-sm w-full h-full focus:outline-none">
                                        </form>
                    
                                    </div>
                    
                                </div>

                                @yield('content')              
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @stack('modals')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous"></script>

        <script>
            window.addEventListener('DOMContentLoaded', () => {
                //Latest
                const btnForumLatest = document.querySelector('#btn-forum-latest')
                const forumMenuLatest = document.querySelector('#forum-menu-latest')
                //All
                const btnForumAll = document.querySelector('#btn-forum-all')
                const forumMenuAll = document.querySelector('#forum-menu-all')
                //btn content hide/show
                const btnContentHide = document.querySelector('#btn-content-hide')
                const btnContentShow = document.querySelector('#btn-content-show')
                
                const contentToggle = document.querySelectorAll('.content-toggle')
    
                btnForumLatest.addEventListener('click', () => {
                    forumMenuLatest.classList.toggle('hidden')
                })
    
                btnForumAll.addEventListener('click', () => {
                    forumMenuAll.classList.toggle('hidden')
                })
    
                btnContentHide.addEventListener('click', () => {
                    // loop through all contentToggle
                    for (const content of contentToggle) {
                        content.classList.add('hidden')
                    }
                    btnContentShow.classList.remove('bg-gray-200','py-1', 'px-1', 'rounded')
                    btnContentHide.classList.add('bg-gray-200','py-1', 'px-1', 'rounded')
                })
    
                btnContentShow.addEventListener('click', () => {
                    // loop through all contentToggle
                    for (const content of contentToggle) {
                        content.classList.remove('hidden')
                    }
                    btnContentShow.classList.add('bg-gray-200','py-1', 'px-1', 'rounded')
                    btnContentHide.classList.remove('bg-gray-200','py-1', 'px-1', 'rounded')
                })
            })
        </script>

        @yield('scripts')

        @livewireScripts
    </body>
</html>
