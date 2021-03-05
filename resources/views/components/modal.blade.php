<!--modal-->
<div id="discussion-modal-toggle" class="fixed z-10 inset-x-0 overflow-y-auto hidden">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <form action="{{ route('discussion.store') }}" method="post">
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
                    @if (!request()->is('discussion/*'))
                        <input type="text" name="title" id="title" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-4/5 sm:text-lg border-gray-300 rounded-md focus:outline-none text-gray-600 border-none font-bold" placeholder="Add a Title">
                    @else
                        <div class="flex items-center sm:text-lg text-gray-600 font-bold">
                            <svg height="16px" version="1.1" viewBox="0 0 16 16" width="16px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="fill-current text-gray-600 mr-2"><g fill="none" fill-rule="evenodd" id="Icons with numbers" stroke="none" stroke-width="1"><g id="Group" transform="translate(0.000000, -336.000000)" class="fill-current"><path d="M0,344 L6,339 L6,342 C10.5,342 14,343 16,348 C13,345.5 10,345 6,346 L6,349 L0,344 L0,344 Z M0,344"></path></g></g></svg>Reply to
                        </div>
                    @endif
                    @if (!request()->is('discussion/*'))
                        <div class="flex items-center">
                            
                            <div>
                                <select name="channel" class="focus:outline-none border rounded-md text-xs px-2 py-1 bg-white mr-3">
                                    <!-- The following line makes a placeholder -->
                                    <option value="" disabled selected hidden>Select Channel</option>
                                    @foreach ($channels as $channel)
                                        <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @auth
                                <div class="flex-shrink-0">
                                    <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </div>
                            @endauth

                        </div>
                    @endif
                </div>
    
                <hr class="mt-3 mb-6">
                <div class="flex flex-col">
                    <input id="content" type="hidden" class="focus:outline-none" name="content" placeholder="What's on your mind?">
                    <trix-editor input="content"></trix-editor>
                </div>
                @if (!request()->is('discussion/*'))
                    <div class="sm:flex sm:justify-between">
                        <div>
                            <p class="text-xs text-gray-400">Markdown Preview OFF</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">* You may use Markdown with <span><a class="text-blue-500" href="https://docs.github.com/en/github/writing-on-github/creating-and-highlighting-code-blocks">GitHub-flavored</a></span> code blocks.</p>
                        </div>
                    </div>
                @endif
    
              </div>
            </div>
            <hr>
            
                <div class="px-4 py-3 mb-10 sm:px-6 sm:flex sm:justify-between sm:items-center">
                    @if (!request()->is('discussion/*'))
                        <div class="flex flex-col">
                            <p class="font-bold text-xs mb-2 text-gray-600">Create a PHP variable and make it equal to the string, "foo".</p>
                            <input type="text" class="px-4 py-2 focus:ring-gray-500 focus:outline-none bg-gray-100 w-full rounded-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Your answer...">
                        </div>
                    @endif
                    <div class="mt-7">
                        <button type="button" id="btn-close-discussion" class="mt-3 bg-gray-100 w-full inline-flex justify-center rounded-full shadow-sm px-6 py-2 text-base font-bold text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm uppercase">
                            Cancel
                        </button>
                        <button type="submit" class="w-full inline-flex justify-center rounded-full shadow-sm px-6 py-2 bg-blue-500 text-base font-bold text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm uppercase">
                            Post
                        </button>
                    </div>
                </div>
            
          </div>
      </form>
    </div>
</div>
<!--end of modal-->

@section('scripts')
  <script>
    window.addEventListener('DOMContentLoaded', () => {
        //Modal toggle
        const btnNewDiscussion = document.querySelector('#btn-new-discussion')
        const btnCloseDiscussion = document.querySelector('#btn-close-discussion')
        const btnNewReply = document.querySelector('#btn-new-reply')

        const discussionModalToggle = document.querySelector('#discussion-modal-toggle')

        btnNewReply.addEventListener('click', () => {
            discussionModalToggle.classList.remove('hidden')
        })

        btnCloseDiscussion.addEventListener('click', () => {
                discussionModalToggle.classList.add('hidden')
        })

        if (window.location.pathname === '/discussion'){
            btnNewDiscussion.addEventListener('click', () => {
                discussionModalToggle.classList.remove('hidden')
            })

            btnCloseDiscussion.addEventListener('click', () => {
                discussionModalToggle.classList.add('hidden')
            })
        }
    })
  </script>
@endsection