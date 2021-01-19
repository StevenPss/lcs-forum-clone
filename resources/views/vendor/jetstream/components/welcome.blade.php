<div class="grid grid-cols-1 md:grid-cols-4">

    <div class="flex flex-col flex-col-reverse md:flex-row mx-auto" style="max-width: 1070px;">
        <!--sidebar-->
        <div class="hidden lg:block lg:sticky mr-9 lg:items-start flex-none" style="min-width:200px; top:40px;">
            <div class="lg:sticky text-center">
                <a id="js-new-discussion-button" href="#" class="bg-blue-400 inline-flex justify-center w-full rounded-xl px-4 py-2 text-sm font-bold text-white hover:bg-blue-500 mb-8 uppercase" style="box-shadow: rgb(215, 232, 253) 0px 4px 10px 1px;">
                    New Discussion
                </a>
                <ul>
                    <li>
                        <a id="js-new-discussion-button" href="#" class="bg-blue-50 inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold text-blue-400 border border-blue-400 hover:bg-blue-500 mb-1 capitalize" style="height:40px;">
                            <i class="fas fa-database text-sm mr-4"></i> all threads
                        </a>
                    </li>
                    <li>
                        <a id="js-new-discussion-button" href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                            <i class="fas fa-star text-sm mr-4"></i> popular this week
                        </a>
                    </li>
                    <li>
                        <a id="js-new-discussion-button" href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                            <i class="fas fa-star text-sm mr-4"></i> popular all time
                        </a>
                    </li>
                    <li>
                        <a id="js-new-discussion-button" href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                            <i class="fas fa-check-circle text-sm mr-4"></i> solved
                        </a>
                    </li>
                    <li>
                        <a id="js-new-discussion-button" href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                            <i class="fas fa-times-circle text-sm mr-4"></i> unsolved
                        </a>
                    </li>
                    <li>
                        <a id="js-new-discussion-button" href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                            <i class="fas fa-reply text-sm mr-4"></i> no replies yet
                        </a>
                    </li>
                    <li>
                        <a id="js-new-discussion-button" href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                            <i class="fas fa-clipboard text-sm mr-4"></i> leaderboard
                        </a>
                    </li>
                </ul>
            </div>
        </div><!--end of sidebar-->
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
                        
                        <div id="forum-menu-latest" class="hidden origin-top-left absolute left-0 mt-2 w-52 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
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
                    
                        <div id="forum-menu-all" class="hidden origin-top-left absolute left-0 mt-2 w-52 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                

                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Test</a>
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


            <!--conversation list-->
            <div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2">
                <!--conversation div-->
                <div class="bg-gray-200 bg-opacity-25 ">
                    <div class="p-6 border-gray-200">
                        <div class="flex justify-between items-center">

                            <div class="flex items-center">
                                <img src="https://i.pinimg.com/280x280_RS/4f/e7/61/4fe7612bbe4b06d30f2182ba47a73403.jpg" class="w-13 h-12 rounded-lg" alt="">

                                <div class="md:hidden ml-4 text-sm text-gray-600 leading-7 font-semibold">
                                    <a href="#" class="hover:underline">StevenPss</a>
                                </div>

                                <div class="text-lg hidden ml-7 md:block text-gray-600 leading-7 font-semibold">
                                    <a href="#" class="hover:underline" title="How to handle these API results?">How to handle these API results?</a>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex">
                                    <ul class="flex items-center text-xs text-gray-400 mr-2 bg-gray-100 rounded-full px-2">
                                        <li class="hidden md:block"><i class="fas fa-eye"></i> 25</li>
                                        <li class="md:ml-4"><i class="fas fa-comment"></i> 50</li>
                                    </ul>

                                    <a href="#" class="uppercase text-orange-400 border-orange-400 font-bold rounded-full hover:bg-orange-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out" style="font-size: 0.63rem;">
                                        Laravel
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="md:ml-20 mt-8 md:mt-0">
                            <div class="md:hidden text-lg text-gray-600 leading-7 font-semibold">
                                <a href="#" class="hover:underline" title="How to handle these API results?">How to handle these API results?</a>
                            </div>

                            <div class="mt-2 md:mt-0 text-sm text-gray-500 content-toggle">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                            </div>

                            <a href="https://laracasts.com">
                                <div class="mt-3 flex items-center text-gray-500 text-xs">
                                    <a href="#" class="uppercase text-blue-500 font-bold hover:underline">StevenPss</a>
                                    <p class="ml-1">replied <span class="font-bold hover:underline"><a href="#">2 minutes ago</a></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--end of conversation div-->
            </div><!--end of conversation list-->




            <!--conversation list-->
            <div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2">
                <!--conversation div-->
                <div class="bg-gray-200 bg-opacity-25 ">
                    <div class="p-6 border-gray-200">
                        <div class="flex justify-between items-center">

                            <div class="flex items-center">
                                <img src="https://i.pinimg.com/280x280_RS/4f/e7/61/4fe7612bbe4b06d30f2182ba47a73403.jpg" class="w-13 h-12 rounded-lg" alt="">

                                <div class="md:hidden ml-4 text-sm text-gray-600 leading-7 font-semibold">
                                    <a href="#" class="hover:underline">StevenPss</a>
                                </div>

                                <div class="text-lg hidden ml-7 md:block text-gray-600 leading-7 font-semibold">
                                    <a href="#" class="hover:underline" title="How to handle these API results?">How to handle these API results?</a>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex">
                                    <ul class="flex items-center text-xs text-gray-400 mr-2 bg-gray-100 rounded-full px-2">
                                        <li class="hidden md:block"><i class="fas fa-eye"></i> 25</li>
                                        <li class="md:ml-4"><i class="fas fa-comment"></i> 50</li>
                                    </ul>

                                    <a href="#" class="uppercase text-orange-400 border-orange-400 font-bold rounded-full hover:bg-orange-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out" style="font-size: 0.63rem;">
                                        Laravel
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="md:ml-20 mt-8 md:mt-0">
                            <div class="md:hidden text-lg text-gray-600 leading-7 font-semibold">
                                <a href="#" class="hover:underline" title="How to handle these API results?">How to handle these API results?</a>
                            </div>

                            <div class="mt-2 md:mt-0 text-sm text-gray-500 content-toggle">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                            </div>

                            <a href="https://laracasts.com">
                                <div class="mt-3 flex items-center text-gray-500 text-xs">
                                    <a href="#" class="uppercase text-blue-500 font-bold hover:underline">StevenPss</a>
                                    <p class="ml-1">replied <span class="font-bold hover:underline"><a href="#">2 minutes ago</a></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--end of conversation div-->
            </div><!--end of conversation list-->



            <!--conversation list-->
            <div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2">
                <!--conversation div-->
                <div class="bg-gray-200 bg-opacity-25 ">
                    <div class="p-6 border-gray-200">
                        <div class="flex justify-between items-center">

                            <div class="flex items-center">
                                <img src="https://i.pinimg.com/280x280_RS/4f/e7/61/4fe7612bbe4b06d30f2182ba47a73403.jpg" class="w-13 h-12 rounded-lg" alt="">

                                <div class="md:hidden ml-4 text-sm text-gray-600 leading-7 font-semibold">
                                    <a href="#" class="hover:underline">StevenPss</a>
                                </div>

                                <div class="text-lg hidden ml-7 md:block text-gray-600 leading-7 font-semibold">
                                    <a href="#" class="hover:underline" title="How to handle these API results?">How to handle these API results?</a>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex">
                                    <ul class="flex items-center text-xs text-gray-400 mr-2 bg-gray-100 rounded-full px-2">
                                        <li class="hidden md:block"><i class="fas fa-eye"></i> 25</li>
                                        <li class="md:ml-4"><i class="fas fa-comment"></i> 50</li>
                                    </ul>

                                    <a href="#" class="uppercase text-orange-400 border-orange-400 font-bold rounded-full hover:bg-orange-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out" style="font-size: 0.63rem;">
                                        Laravel
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="md:ml-20 mt-8 md:mt-0">
                            <div class="md:hidden text-lg text-gray-600 leading-7 font-semibold">
                                <a href="#" class="hover:underline" title="How to handle these API results?">How to handle these API results?</a>
                            </div>

                            <div class="mt-2 md:mt-0 text-sm text-gray-500 content-toggle">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                            </div>

                            <a href="https://laracasts.com">
                                <div class="mt-3 flex items-center text-gray-500 text-xs">
                                    <a href="#" class="uppercase text-blue-500 font-bold hover:underline">StevenPss</a>
                                    <p class="ml-1">replied <span class="font-bold hover:underline"><a href="#">2 minutes ago</a></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--end of conversation div-->
            </div><!--end of conversation list-->



            <!--conversation list-->
            <div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2">
                <!--conversation div-->
                <div class="bg-gray-200 bg-opacity-25 ">
                    <div class="p-6 border-gray-200">
                        <div class="flex justify-between items-center">

                            <div class="flex items-center">
                                <img src="https://i.pinimg.com/280x280_RS/4f/e7/61/4fe7612bbe4b06d30f2182ba47a73403.jpg" class="w-13 h-12 rounded-lg" alt="">

                                <div class="md:hidden ml-4 text-sm text-gray-600 leading-7 font-semibold">
                                    <a href="#" class="hover:underline">StevenPss</a>
                                </div>

                                <div class="text-lg hidden ml-7 md:block text-gray-600 leading-7 font-semibold">
                                    <a href="#" class="hover:underline" title="How to handle these API results?">How to handle these API results?</a>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex">
                                    <ul class="flex items-center text-xs text-gray-400 mr-2 bg-gray-100 rounded-full px-2">
                                        <li class="hidden md:block"><i class="fas fa-eye"></i> 25</li>
                                        <li class="md:ml-4"><i class="fas fa-comment"></i> 50</li>
                                    </ul>

                                    <a href="#" class="uppercase text-orange-400 border-orange-400 font-bold rounded-full hover:bg-orange-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out" style="font-size: 0.63rem;">
                                        Laravel
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="md:ml-20 mt-8 md:mt-0">
                            <div class="md:hidden text-lg text-gray-600 leading-7 font-semibold">
                                <a href="#" class="hover:underline" title="How to handle these API results?">How to handle these API results?</a>
                            </div>

                            <div class="mt-2 md:mt-0 text-sm text-gray-500 content-toggle">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                            </div>

                            <a href="https://laracasts.com">
                                <div class="mt-3 flex items-center text-gray-500 text-xs">
                                    <a href="#" class="uppercase text-blue-500 font-bold hover:underline">StevenPss</a>
                                    <p class="ml-1">replied <span class="font-bold hover:underline"><a href="#">2 minutes ago</a></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--end of conversation div-->
            </div><!--end of conversation list-->



            <!--conversation list-->
            <div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2">
                <!--conversation div-->
                <div class="bg-gray-200 bg-opacity-25 ">
                    <div class="p-6 border-gray-200">
                        <div class="flex justify-between items-center">

                            <div class="flex items-center">
                                <img src="https://i.pinimg.com/280x280_RS/4f/e7/61/4fe7612bbe4b06d30f2182ba47a73403.jpg" class="w-13 h-12 rounded-lg" alt="">

                                <div class="md:hidden ml-4 text-sm text-gray-600 leading-7 font-semibold">
                                    <a href="#" class="hover:underline">StevenPss</a>
                                </div>

                                <div class="text-lg hidden ml-7 md:block text-gray-600 leading-7 font-semibold">
                                    <a href="#" class="hover:underline" title="How to handle these API results?">How to handle these API results?</a>
                                </div>
                            </div>
                            
                            <div class="flex">
                                <div class="flex">
                                    <ul class="flex items-center text-xs text-gray-400 mr-2 bg-gray-100 rounded-full px-2">
                                        <li class="hidden md:block"><i class="fas fa-eye"></i> 25</li>
                                        <li class="md:ml-4"><i class="fas fa-comment"></i> 50</li>
                                    </ul>

                                    <a href="#" class="uppercase text-orange-400 border-orange-400 font-bold rounded-full hover:bg-orange-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out" style="font-size: 0.63rem;">
                                        Laravel
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="md:ml-20 mt-8 md:mt-0">
                            <div class="md:hidden text-lg text-gray-600 leading-7 font-semibold">
                                <a href="#" class="hover:underline" title="How to handle these API results?">How to handle these API results?</a>
                            </div>

                            <div class="mt-2 md:mt-0 text-sm text-gray-500 content-toggle">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                            </div>

                            <a href="https://laracasts.com">
                                <div class="mt-3 flex items-center text-gray-500 text-xs">
                                    <a href="#" class="uppercase text-blue-500 font-bold hover:underline">StevenPss</a>
                                    <p class="ml-1">replied <span class="font-bold hover:underline"><a href="#">2 minutes ago</a></span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--end of conversation div-->
            </div><!--end of conversation list-->



            


    </div>

</div>



@section('css')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        .search-form {
            background-image: url('https://laracasts.com/images/icons/search.svg');
            background-repeat: no-repeat;
            background-position: 16px 13.5px;
            padding-left: 20px;
        }
    </style>
@endsection

@section('scripts')
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
@endsection