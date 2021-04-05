<x-app-layout>
    @section('content')
        @foreach ($discussions as $discussion)
            <x-conversation-list
                slug="{{ $discussion->slug }}"
                title="{{ $discussion->title }}"
                username="{{ $discussion->user->name }}"
                gravatar="{{ $discussion->user->email }}"
                content="{{ $discussion->content }}"
                date="{{ $discussion->created_at }}"
                replies="{{ $discussion->replies()->count() }}"
            />
        @endforeach
    @endsection
</x-app-layout>