<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    {{-- Email Verification --}}
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    {{-- Profile Update Form --}}
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('patch')

        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))
            <div class="text-green-600 mb-3">
                {{ session('success') }}
            </div>
        @endif

        {{-- PROFILE IMAGE PREVIEW --}}
        <div class="mb-4 text-center">
            <img 
                src="{{ auth()->user()->image ? asset('storage/'.auth()->user()->image) : 'https://via.placeholder.com/100' }}"
                width="100" height="100"
                style="border-radius:50%; object-fit:cover;">
        </div>

        {{-- NAME --}}
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input 
                id="name" 
                name="name" 
                type="text" 
                class="mt-1 block w-full" 
                :value="old('name', $user->name)" 
                required 
                autofocus 
            />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        {{-- EMAIL --}}
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input 
                id="email" 
                name="email" 
                type="email" 
                class="mt-1 block w-full" 
                :value="old('email', $user->email)" 
                required 
            />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Verification link sent.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        {{-- PROFILE IMAGE UPLOAD --}}
        <div class="mt-4">
            <x-input-label for="image" :value="__('Profile Image')" />
            <input type="file" name="image" class="mt-1 block w-full">
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>

        {{-- PASSWORD (OPTIONAL) --}}
        <div class="mt-4">
            <x-input-label for="password" :value="__('New Password (optional)')" />
            <input type="password" name="password" class="mt-1 block w-full">
            <x-input-error class="mt-2" :messages="$errors->get('password')" />
        </div>

        {{-- SUBMIT --}}
        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>