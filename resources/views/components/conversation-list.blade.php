<?php
    use Illuminate\Support\Str;

    $truncated_content = Str::limit($content, 250);
?>

<!--conversation list-->
<div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2">
    <!--conversation div-->
    <div class="bg-gray-200 bg-opacity-25 ">
        <div class="p-6 border-gray-200">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ Gravatar::src($gravatar) }}" class="w-13 h-12 rounded-lg" alt="">

                    <div class="md:hidden ml-4 text-sm text-gray-600 leading-7 font-semibold">
                        <a href="#" class="hover:underline">{{ $username }}</a>
                    </div>

                    <div class="text-lg hidden ml-7 md:block text-gray-600 leading-7 font-semibold">
                        <a href="{{ route('discussion.show', $slug) }}" class="hover:underline" title="{{ $title }}?">{{ $title }}?</a>
                    </div>
                </div>
                
                <div class="flex">
                    <div class="flex">
                        <ul class="flex items-center text-xs text-gray-400 mr-2 bg-gray-100 rounded-full px-2">
                            <li class="hidden md:block"><i class="fas fa-eye"></i> 25</li>
                            <li class="md:ml-4"><i class="fas fa-comment"></i> {{ $replies }}</li>
                        </ul>

                        <a href="#" class="uppercase text-orange-400 border-orange-400 font-bold rounded-full hover:bg-orange-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out" style="font-size: 0.63rem;">
                            Laravel
                        </a>
                    </div>
                </div>
            </div>

            <div class="md:ml-20 mt-8 md:mt-0">
                <div class="md:hidden text-lg text-gray-600 leading-7 font-semibold">
                    <a href="{{ route('discussion.show', $slug) }}" class="hover:underline" title="{{ $title }}?">{{ $title }}?</a>
                </div>

                <div class="mt-2 md:mt-0 text-sm text-gray-500 content-toggle">
                    {!! $truncated_content !!} 
                </div>

                <a href="https://laracasts.com">
                    <div class="mt-3 flex items-center text-gray-500 text-xs">
                        <a href="#" class="uppercase text-blue-500 font-bold hover:underline">{{ $username }}</a>
                        <p class="ml-1">replied <span class="font-bold hover:underline"><a href="#">{{ \Carbon\Carbon::parse($date)->diffForhumans() }}</a></span></p>
                    </div>
                </a>
            </div>
        </div>
    </div><!--end of conversation div-->
</div><!--end of conversation list-->