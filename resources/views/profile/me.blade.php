<x-layouts.account>

  <div class="flex flex-col items-center justify-center min-h-[60vh] bg-transparent">

    <div class="card card-xl  sm:max-w-sm mx-auto mt-10">
      <div class="card-header text-center">
        <div class="avatar mb-3">
          <div class="w-34 h-34 rounded-full overflow-hidden mx-auto">
            @if ($user->avtar)
        <img src="/storage/{{ $user->avtar }}" alt="avatar" />
      @else
        <img src="/images/default.jpg" alt="avatar" />
      @endif
          </div>
        </div>
        <h2 class="text-lg font-semibold">{{ $user->name }}</h2>
        <div class="mt-4 text-center">
          <span class="text-sm text-gray-400">Tweets:</span>
          <span class="text-lg font-bold text-primary">{{ $tweets_count }}</span>

          <div class="mt-10 w-full max-w-xl mx-auto">
            <h3 class="text-xl font-bold mb-4 text-center">Tweets</h3>

            @forelse ($tweets as $tweet)
        <div class="mb-4 w-[300px] h-[100px] mx-auto p-4 border border-base-300 rounded-lg shadow-sm bg-base-100 overflow-hidden">
          <p class="text-base text-gray-800">{{ $tweet->contect }}</p>
          <div class="text-sm text-gray-500 mt-2 text-right">
          {{ $tweet->created_at->diffForHumans() }}
          </div>
        </div>
      @empty
        <p class="text-center text-gray-400">No tweets yet.</p>
      @endforelse
          </div>

        </div>

      </div>
    </div>


</x-layouts.account>