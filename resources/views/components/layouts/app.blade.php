<x-layouts.default>
  <nav
    class="navbar  max-w-4xl mx-auto bg-base-100 rounded-box shadow-base-300/20 shadow-sm sticky top-4 z-50 border-2">

    <div class="flex flex-1 items-center">
      <a class="link text-base-content link-neutral text-xl font-bold no-underline" href="/">
        <button class="btn p-2 btn-text">
          <span class="icon-[tabler--brand-twitter-filled] w-6 h-6 text-blue-500"></span>
        </button>
      </a>
    </div>
    <div class="navbar-end flex items-center gap-4">

      <span class="icon-[tabler--bell-off] size-6"></span>

      <div class="dropdown relative inline-flex [--auto-close:inside] [--offset:8] [--placement:bottom-end]"></div>



      @if (Auth::check())

      <div class="dropdown relative inline-flex [--auto-close:inside] [--offset:8] [--placement:bottom-end]">

      <button id="dropdown-scrollable" type="button" class="dropdown-toggle flex items-center" aria-haspopup="menu"
        aria-expanded="false" aria-label="Dropdown">
        <div class="avatar">
        <div class="size-9.5 rounded-full">
          @if (Auth::user()->avatar)
          <img src="/storage/{{ Auth::user()->avatar }}" alt="avatar" />
          @else
          <img src="/images/default.jpg" alt="avatar" />

          @endif
          
        </div>
        </div>
      </button>
      <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu" aria-orientation="vertical"
        aria-labelledby="dropdown-avatar">
        <li class="dropdown-header gap-2">
        <div class="avatar">
          <div class="w-10 rounded-full">

           @if (Auth::user()->avatar)
          <img src="/storage/{{ Auth::user()->avatar }}" alt="avatar" />
          @else
          <img src="/images/default.jpg" alt="avatar" />

          @endif
          </div>
        </div>
        <div>
          <h6 class="text-base-content text-base font-semibold">{{ Auth::user()->name }}</h6>
          <small class="text-base-content/50">Admin</small>
        </div>
        </li>
        <li>
        <a class="dropdown-item" href="{{ route('profile.me') }}">
          <span class="icon-[tabler--user]"></span>
          My Profile
        </a>
        </li>
        <li>
        <a class="dropdown-item" href="#">
          <span class="icon-[tabler--settings]"></span>
          Settings
        </a>
        </li>

        <li class="dropdown-footer gap-2">
        <form method="post" action="{{ route('logout') }}" class="w-full">
          @csrf
          <button class="btn btn-error btn-soft btn-block">
          <span class="icon-[tabler--logout]"></span>
          Sign out
          </button>
        </form>
        </li>
      </ul>
      </div>

    @else


      <a href="{{ route('login') }}">
      <button class="btn btn-text btn-square">
        <span class="icon-[tabler--login-2] size-6"></span>
      </button>
      </a>

    @endif


    </div>
  </nav>
  <div class="my-6 flex-1">
    {{ $slot }}
  </div>

  <form method="post" action="{{ route('tweet.create') }}"
    class="border border-base-20 border-t-2 border-t-black rounded-field sticky bottom-4 drop-shadow-2xl bg-base-100">
    @csrf
    <input type="hidden" name="parent_tweet_id" value="{{ request()->tweet?->id }}" />
    <div class="textarea-floating">
      <textarea required class="textarea border-0 resize-none" id="contect" name="contect"></textarea>
      <label class="textarea-floating-label" for="contect">write a tweet</label>
    </div>
    <div class="p-2 pt-0">
      @error('contect')
      <div style="color: red;">
      {{ $message }}
      </div>
    @enderror
      <button type="submit" class="btn btn-primary btn-square">
        <span class="icon-[tabler--send]"></span>
      </button>
    </div>
  </form>
</x-layouts.default>
