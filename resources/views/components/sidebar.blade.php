<!--sidebar-->
<div class="hidden lg:block lg:sticky mr-9 lg:items-start flex-none" style="min-width:200px; top:40px;">
    <div class="lg:sticky text-center">
        @if (request()->is('discussion'))
            @auth
                <button id="btn-new-discussion" class="bg-blue-400 inline-flex justify-center w-full rounded-xl px-4 py-2 text-sm font-bold text-white hover:bg-blue-500 mb-8 uppercase focus:outline-none" style="box-shadow: rgb(215, 232, 253) 0px 4px 10px 1px;">
                    New Discussion
                </button>                
            @endauth           
        @endif

        @if (request()->is('discussion/*'))
            @if (!Auth::user())
                <a href="{{ route('login') }}" class="bg-blue-400 inline-flex justify-center w-full rounded-xl px-4 py-2 text-sm font-bold text-white hover:bg-blue-500 mb-8 uppercase focus:outline-none" style="box-shadow: rgb(215, 232, 253) 0px 4px 10px 1px;">
                    Reply 
                </a>
            @else
                <button id="btn-new-reply" class="bg-blue-400 inline-flex justify-center w-full rounded-xl px-4 py-2 text-sm font-bold text-white hover:bg-blue-500 mb-8 uppercase focus:outline-none" style="box-shadow: rgb(215, 232, 253) 0px 4px 10px 1px;">
                    Reply 
                </button>
            @endif
        @endif

        <ul>
            <li>
                <a href="#" class="bg-blue-50 inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold text-blue-400 border border-blue-400 hover:bg-blue-500 mb-1 capitalize" style="height:40px;">
                    <i class="fas fa-database text-sm mr-4"></i> all threads
                </a>
            </li>
            @auth
                <li>
                    <a href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                        <i class="fas fa-question-circle text-sm mr-4"></i> my questions
                    </a>
                </li>
                <li>
                    <a href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                        <i class="fas fa-star text-sm mr-4"></i> my participation
                    </a>
                </li>
                <li>
                    <a href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                        <i class="fas fa-check-circle text-sm mr-4"></i> my best answers
                    </a>
                </li>
                <li>
                    <a href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                        <i class="fas fa-star text-sm mr-4"></i> following
                    </a>
                </li>
            @endauth
            <li>
                <a href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                    <i class="fas fa-star text-sm mr-4"></i> popular this week
                </a>
            </li>
            <li>
                <a href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                    <i class="fas fa-star text-sm mr-4"></i> popular all time
                </a>
            </li>
            <li>
                <a href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                    <i class="fas fa-check-circle text-sm mr-4"></i> solved
                </a>
            </li>
            <li>
                <a href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                    <i class="fas fa-times-circle text-sm mr-4"></i> unsolved
                </a>
            </li>
            <li>
                <a href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                    <i class="fas fa-reply text-sm mr-4"></i> no replies yet
                </a>
            </li>
            <li>
                <a href="#" class="inline-flex justify-start items-center w-full rounded-xl px-4 py-2 text-xs font-semibold hover:text-blue-400 text-gray-400 border hover:border-blue-400 hover:bg-blue-50 mb-1 capitalize" style="height:40px;">
                    <i class="fas fa-clipboard text-sm mr-4"></i> leaderboard
                </a>
            </li>
        </ul>
    </div>
</div><!--end of sidebar-->