<x-app-layout>
    @section('content')
        <!--conversation list-->
        <div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2" id="conversation-stats">
            <!--conversation div-->
            <div class="bg-gray-200 bg-opacity-25">
                <div class="p-4 border-gray-200">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center text-xs text-gray-500 hidden md:block">
                            <p><span class="font-bold">{{ $discussion->user->name }}</span> started this conversation <span>{{ \Carbon\Carbon::parse($discussion->created_at)->diffForhumans() }}</span>. 2 people have replied.</p>
                        </div>
                        
                        <div class="flex">
                            <div class="flex md:justify-between">
                                <ul class="flex items-center text-xs text-gray-400 mr-2 bg-gray-100 rounded-full px-2">
                                    <li class="md:mr-4"><i class="fas fa-eye"></i> 25</li>
                                    <li class="md:ml-4"><i class="fas fa-comment"></i> 50</li>
                                </ul>

                                <a href="#" class="uppercase text-orange-400 border-orange-400 font-bold rounded-full hover:bg-orange-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out" style="font-size: 0.63rem;">
                                    Laravel
                                </a>
                            </div>
                        </div>
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
                            <img src="{{ Gravatar::src($discussion->user->email) }}" class="w-13 h-12 rounded-lg" alt="">

                            <div class="flex flex-col">
                                <div class="pl-7 mb-4 text-sm text-gray-600 leading-7 font-semibold">
                                    <a href="#" class="hover:underline">{{ $discussion->user->name }}</a>
                                    <p class="text-xs">posted <span class="font-bold hover:underline"><a href="#">{{ \Carbon\Carbon::parse($discussion->created_at)->diffForhumans() }}</a></span></p>
                                </div>
    
                                <div class="text-lg bg-gray-200 px-4 py-2 md:w-96 rounded-lg hidden ml-7 mb-10 md:block text-gray-600 leading-7 font-semibold">
                                    <a href="{{ route('discussion.show', $discussion->slug) }}" class="hover:underline" title="{{ $discussion->title }}?">{{ $discussion->title }}?</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex">
                                <a href="#" class="uppercase text-gray-400 border-gray-400 font-bold rounded-full hover:bg-gray-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out" style="font-size: 0.63rem;">
                                    Zero
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="md:ml-20 mt-8 md:mt-0">
                        <div class="md:hidden text-lg text-gray-600 bg-gray-200 rounded-lg px-4 py-2 md:w-96 mb-10 leading-7 font-semibold">
                            <a href="{{ route('discussion.show', $discussion->slug) }}" class="hover:underline" title="{{ $discussion->title }}?">{{ $discussion->title }}?</a>
                        </div>

                        <div class="mt-2 md:mt-0 text-sm text-gray-500 content-toggle">
                            {!! $discussion->content !!}
                        </div>

                        <a href="https://laracasts.com">
                            <div class="mt-3 flex items-center text-gray-500 text-xs">
                                <a href="#" class="uppercase text-blue-500 font-bold hover:underline">{{ $discussion->user->name }}</a>
                                <p class="ml-1">replied <span class="font-bold hover:underline"><a href="#">{{ \Carbon\Carbon::parse($discussion->created_at)->diffForhumans() }}</a></span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!--end of conversation div-->
        </div><!--end of conversation list-->
    @endsection

    @section('css')
        <style>
            #conversation-stats{
                position: relative;
                margin-left: 60px;
            }
            #conversation-stats::before{
                position: absolute;
                display: block;
                top: 50%;
                left: -36px;
                content: "";
                width: 25px;
                height: 26px;
                border: 3px solid #000;
                border-right: none;
                border-bottom: none;
            }
        </style>
    @endsection
</x-app-layout>