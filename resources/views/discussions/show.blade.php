<x-app-layout>
    @section('content')
        <!--conversation list-->
        <div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2" id="conversation-stats">
            <!--conversation div-->
            <div class="bg-gray-200 bg-opacity-25">
                <div class="p-4 border-gray-200">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center text-xs text-gray-500 hidden md:block">
                            <p><span class="font-bold">{{ $discussion->user->name }}</span> started this conversation <span>{{ \Carbon\Carbon::parse($discussion->created_at)->diffForhumans() }}</span>. 
                            @if ($discussion->replies()->count() > 1)
                                {{ $discussion->replies()->count() }} people have replied.
                            @elseif($discussion->replies()->count() == 0)
                                {{ $discussion->replies()->count() }} replies.
                            @else
                                {{ $discussion->replies()->count() }} person has replied.
                            @endif </p>
                        </div>
                        
                        <div class="flex">
                            <div class="flex md:justify-between">
                                <ul class="flex items-center text-xs text-gray-400 mr-2 bg-gray-100 rounded-full px-2">
                                    <li class="md:mr-4"><i class="fas fa-eye"></i> 25</li>
                                    <li class="md:ml-4"><i class="fas fa-comment"></i> {{ $discussion->replies()->count() }}</li>
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
            <div class="bg-gray-200 bg-opacity-25">
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

        <!--conversation list replies-->
        @foreach ($discussion->replies()->paginate(2) as $reply)
            @if (isset($discussion->bestReply->id))
                @if ($discussion->bestReply->id === $reply->id)
                    <div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2">
                        <!--conversation div-->
                        <div class="bg-blue-500 bg-opacity-25 ">
                            <div class="p-6 border border-blue-400">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <img src="{{ Gravatar::src($reply->owner->email) }}" class="w-13 h-12 rounded-lg" alt="">

                                        <div class="flex flex-col">
                                            <div class="pl-7 mb-4 text-sm text-gray-600 leading-7 font-semibold">
                                                <a href="#" class="hover:underline">{{ $reply->owner->name }}</a>
                                                <p class="text-xs">posted <span class="font-bold hover:underline"><a href="#">{{ \Carbon\Carbon::parse($reply->created_at)->diffForhumans() }}</a></span></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="flex md:flex-row flex-col">
                                            <span title="Did this reply answer your question?" class="uppercase text-white font-bold rounded-full md:px-5 px-4 py-1 border transition duration-300 ease-in-out md:mr-2 mb-2" style="font-size: 0.63rem;background-image: linear-gradient(70deg, rgb(33, 200, 246) 21%, rgb(99, 123, 255) 117%);">
                                                Best Answer
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="md:ml-20 mt-8 md:mt-0">
                                    <div class="mt-2 md:mt-0 text-sm text-gray-500 content-toggle">
                                        {!! $discussion->bestReply->content !!}
                                    </div>

                                    <a href="https://laracasts.com">
                                        <div class="mt-3 flex items-center text-gray-500 text-xs">
                                            <a href="#" class="uppercase text-blue-500 font-bold hover:underline">Reply</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div><!--end of conversation div-->
                    </div>
                @else
                    <div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2">
                        <!--conversation div-->
                        <div class="bg-gray-200 bg-opacity-25 ">
                            <div class="p-6 border-gray-200">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <img src="{{ Gravatar::src($reply->owner->email) }}" class="w-13 h-12 rounded-lg" alt="">

                                        <div class="flex flex-col">
                                            <div class="pl-7 mb-4 text-sm text-gray-600 leading-7 font-semibold">
                                                <a href="#" class="hover:underline">{{ $reply->owner->name }}</a>
                                                <p class="text-xs">posted <span class="font-bold hover:underline"><a href="#">{{ \Carbon\Carbon::parse($reply->created_at)->diffForhumans() }}</a></span></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="flex md:flex-row flex-col">
                                            <a href="#" class="uppercase text-gray-400 border-gray-400 font-bold rounded-full hover:bg-gray-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out md:mr-2 mb-2" style="font-size: 0.63rem;">
                                                Zero
                                            </a>
                                            @if (auth()->user()->id === $discussion->user_id)
                                                <form action="{{ route('discussion.best-reply', [
                                                    'discussion' => $discussion->slug,
                                                    'reply' => $reply->id
                                                ]) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="uppercase text-green-400 border-green-400 font-bold rounded-full hover:bg-green-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out mb-2" style="font-size: 0.63rem;">
                                                        Mark as best
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="md:ml-20 mt-8 md:mt-0">
                                    <div class="mt-2 md:mt-0 text-sm text-gray-500 content-toggle">
                                        {!! $reply->content !!}
                                    </div>

                                    <a href="https://laracasts.com">
                                        <div class="mt-3 flex items-center text-gray-500 text-xs">
                                            <a href="#" class="uppercase text-blue-500 font-bold hover:underline">Reply</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div><!--end of conversation div-->
                    </div>
                @endif
                @else
                <div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2">
                    <!--conversation div-->
                    <div class="bg-gray-200 bg-opacity-25 ">
                        <div class="p-6 border-gray-200">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <img src="{{ Gravatar::src($reply->owner->email) }}" class="w-13 h-12 rounded-lg" alt="">

                                    <div class="flex flex-col">
                                        <div class="pl-7 mb-4 text-sm text-gray-600 leading-7 font-semibold">
                                            <a href="#" class="hover:underline">{{ $reply->owner->name }}</a>
                                            <p class="text-xs">posted <span class="font-bold hover:underline"><a href="#">{{ \Carbon\Carbon::parse($reply->created_at)->diffForhumans() }}</a></span></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex">
                                    <div class="flex md:flex-row flex-col">
                                        <a href="#" class="uppercase text-gray-400 border-gray-400 font-bold rounded-full hover:bg-gray-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out md:mr-2 mb-2" style="font-size: 0.63rem;">
                                            Zero
                                        </a>
                                        @if (auth()->user()->id === $discussion->user_id)
                                            <form action="{{ route('discussion.best-reply', [
                                                'discussion' => $discussion->slug,
                                                'reply' => $reply->id
                                            ]) }}" method="post">
                                                @csrf
                                                <button type="submit" class="uppercase text-green-400 border-green-400 font-bold rounded-full hover:bg-green-400 md:px-5 px-4 py-1 border hover:text-white transition duration-300 ease-in-out mb-2" style="font-size: 0.63rem;">
                                                    Mark as best
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="md:ml-20 mt-8 md:mt-0">
                                <div class="mt-2 md:mt-0 text-sm text-gray-500 content-toggle">
                                    {!! $reply->content !!}
                                </div>

                                <a href="https://laracasts.com">
                                    <div class="mt-3 flex items-center text-gray-500 text-xs">
                                        <a href="#" class="uppercase text-blue-500 font-bold hover:underline">Reply</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><!--end of conversation div-->
                </div>
            @endif
        @endforeach
        <!--end of conversation list replies-->

        {{ $discussion->replies()->paginate(2)->links() }}

        <div class="flex flex-col flex-col-reverse md:flex-row mx-auto" style="max-width: 1070px;">
            <!--modal-->
            <div id="replies-modal-toggle" class="relative z-10 inset-x-0 overflow-y-auto hidden">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <form action="{{ route('replies.store', $discussion->slug) }}" method="post">
                        @csrf
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <!-- This element is to trick the browser into centering the modal contents. -->
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        
                        <div class="inline-block align-bottom bg-white inset-x-0 bottom-0 rounded-xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:flex-col sm:justify-between">
                                    <div class="flex">
                                        <div class="flex items-center sm:text-lg text-gray-600 font-bold">
                                            <svg height="16px" version="1.1" viewBox="0 0 16 16" width="16px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="fill-current text-gray-600 mr-2"><g fill="none" fill-rule="evenodd" id="Icons with numbers" stroke="none" stroke-width="1"><g id="Group" transform="translate(0.000000, -336.000000)" class="fill-current"><path d="M0,344 L6,339 L6,342 C10.5,342 14,343 16,348 C13,345.5 10,345 6,346 L6,349 L0,344 L0,344 Z M0,344"></path></g></g></svg>Reply to
                                        </div>
                                    </div>
                        
                                    <hr class="mt-3 mb-6">
                                    <div class="flex flex-col">
                                        <input id="content_reply" type="hidden" class="focus:outline-none" name="content_reply" placeholder="What's on your mind?">
                                        <trix-editor input="content_reply"></trix-editor>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            
                            <div class="px-4 py-3 mb-10 sm:px-6 sm:flex sm:justify-between sm:items-center">
                                <div class="mt-7">
                                    <button type="button" id="btn-close-reply" class="mt-3 bg-gray-100 w-full inline-flex justify-center rounded-full shadow-sm px-6 py-2 text-base font-bold text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm uppercase">
                                        Cancel
                                    </button>
                                    <button type="submit" class="w-full inline-flex justify-center rounded-full shadow-sm px-6 py-2 bg-blue-500 text-base font-bold text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm uppercase">
                                        Reply
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
            <!--end of modal-->
        </div>
    @endsection

    @section('scripts')
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                //Modal toggle
                const btnNewReply = document.querySelector('#btn-new-reply')
                const btnCloseReply = document.querySelector('#btn-close-reply')

                const repliesModalToggle = document.querySelector('#replies-modal-toggle')

                btnNewReply.addEventListener('click', () => {
                    repliesModalToggle.classList.remove('hidden')
                })

                btnCloseReply.addEventListener('click', () => {
                    repliesModalToggle.classList.add('hidden')
                })
            })
        </script>
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