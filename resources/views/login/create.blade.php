<x-layouts.auth>
    <form method="post" class="space-y-2 w-90">
        @csrf
        <x-input id="email" label="Emile " icon="icon-[tabler--mail]" type="email" />
        <x-error field="email" />
        <x-input id="password" label="Password" icon="icon-[tabler--lock]" type="password" />
        <x-error field="password" />

        <button type="submit" class="btn btn-primary w-full mt-8">Sgin in</button>
        <span>
            Don't have an acoount?
            <a href="/register" class="link link-primary">Sgin up</a>
        </span>
    </form>
</x-layouts.auth>