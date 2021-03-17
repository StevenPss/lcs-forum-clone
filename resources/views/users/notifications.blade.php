<x-app-layout>
    @section('content')
        <!--notifications list-->
        <div class="bg-white overflow-hidden sm:rounded-lg border border-gray-200 rounded-lg mb-2">
            <div class="bg-gray-200 bg-opacity-25">
                <div class="p-4 border-gray-200">
                    <ul>
                        @foreach ($notifications as $notification)
                            <li class="border-b py-2">
                                @if ($notification->type === 'App\Notifications\NewReply')
                                    <div class="flex justify-between">
                                        <div>New reply from discussion - <strong>{{ $notification->data['discussion']['slug'] }}</strong></div>
                                        <a href="{{ route('discussion.show', $notification->data['discussion']['slug']) }}" class="bg-blue-400 inline-flex justify-center rounded-xl px-2 py-1 text-sm font-bold text-white hover:bg-blue-500 focus:outline-none" style="box-shadow: rgb(215, 232, 253) 0px 4px 10px 1px;">
                                            View Reply 
                                        </a>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div><!--end of notifications list-->
    @endsection

   

    
</x-app-layout>