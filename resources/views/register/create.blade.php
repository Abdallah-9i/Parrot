<x-layouts.auth>

    <form method="post" enctype="multipart/form-data" class="space-y-2 w-90">
        @csrf

        <div class="max-w-sm input-floating">
            <input type="file" accept="image/*" class="input" id="avtar" name="avtar" />
            <label class="input-floating-label" for="avtar">avtar</label>

            @error('avtar')
                <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
            @enderror
        </div>

        <x-input id="name" name="name" minLength="3" label="Username" icon="icon-[tabler--user]" />
        <x-error field="name" />

        <x-input id="email" name="email" label="Email" icon="icon-[tabler--mail]" type="email" />
        <x-error field="email" />

        <x-input id="password" name="password" minLength="8" label="Password" icon="icon-[tabler--lock]"
            type="password" />
        <x-error field="password" />

        <x-input id="password_confirmation" name="password_confirmation" minLength="8" label="Password Check"
            icon="icon-[tabler--lock-check]" type="password" />
        <x-error field="password_confirmation" />

        <button type="submit" class="btn btn-primary w-full mt-8">Create Account</button>
    </form>

    <span>
        Already have an account?
        <a href="/login" class="link link-primary">Log in</a>
    </span>

</x-layouts.auth>