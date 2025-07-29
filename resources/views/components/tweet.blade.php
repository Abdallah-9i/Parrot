@props([
    'tweet',
])
<div class="card">
        <div class="card-body py-4 px-8">
            <p>{{ $tweet->contect }}</p>
        </div>
   <div class="card-actions p-6 pt-0 flex justify-between items-center">
    @if (request()->routeIs('home'))
        <a href="{{ route('tweet.view', $tweet->baseTweet->id) }}" 
            class="btn btn-text btn-square"
        >
            <span class="icon-[tabler--message-circle] size-6"></span>
        </a>
        @else

    <button
    onclick="document.querySelector(`input[name='parent_tweet_id']`).value ={{ $tweet->id }}"
    class="btn btn-text btn-square">
            <span class="icon-[tabler--message-circle] size-6"></span>
    </button>
       
    @endif
    <a href="{{ route('profile.show', $tweet->user->id) }}" class="flex items-center gap-2">

    <div class="flex btn btn-text">
            <div class="link link-primary">
                {{ $tweet->user->name }}
            </div>
            <div class="avatar">
                <div class="size-8 rounded-full">
                     @if ($tweet->user->avtar)
                        <img src="/storage/{{ $tweet->user->avtar }}" alt="avatar"/>
                     @else
                        <img src="/images/default.jpg" alt="avatar" />
                     @endif
                </div>
            </div>
    </div>
    
    
    </a>
    </div>
</div>

        
@if (request()->routeIs('tweet.view'))

<div class="ms-6 ps-2 space-y-2 border-s-2">
    
    @foreach ($tweet->childTweets as $childTweet )
    <x-tweet :tweet="$childTweet" />
    @endforeach

</div>
@endif
 
           
       
