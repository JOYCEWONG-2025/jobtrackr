<section>
    <header>
        <h2 class="jt-section-title text-2xl text-gray-800">Profile Information</h2>
        <p class="mt-1 text-sm text-gray-500">
            Update your account's name and email address.
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
            <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                <span class="text-[#818CF8] mr-3">👤</span>
                <input id="name" name="name" type="text" class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
            <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                <span class="text-[#818CF8] mr-3">✉</span>
                <input id="email" name="email" type="email" class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium" value="{{ old('email', $user->email) }}" required autocomplete="username">
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="rounded-lg bg-amber-50 border border-amber-200 px-4 py-3 text-sm text-amber-800">
                Your email address is unverified.
                <button form="send-verification" class="underline font-semibold hover:text-amber-900">
                    Click here to re-send the verification email.
                </button>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-green-700">
                        A new verification link has been sent to your email address.
                    </p>
                @endif
            </div>
        @endif

        <div class="flex items-center gap-4">
            <button type="submit"
                class="py-2.5 px-6 rounded-lg text-white font-semibold text-sm hover:opacity-90 transition"
                style="background:linear-gradient(90deg,#818CF8,#7C3AED);">
                Save
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)" class="text-sm text-green-600 font-semibold">
                    Saved.
                </p>
            @endif
        </div>
    </form>
</section>