<section>
    <header>
        <h2 class="jt-section-title text-2xl text-gray-800">Update Password</h2>
        <p class="mt-1 text-sm text-gray-500">
            Ensure your account is using a long, random password to stay secure.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Current Password</label>
            <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                <span class="text-[#818CF8] mr-3">🔒</span>
                <input id="update_password_current_password" name="current_password" type="password" class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium" autocomplete="current-password">
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">New Password</label>
            <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                <span class="text-[#818CF8] mr-3">🔒</span>
                <input id="update_password_password" name="password" type="password" class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium" autocomplete="new-password">
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Confirm Password</label>
            <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                <span class="text-[#818CF8] mr-3">🔒</span>
                <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium" autocomplete="new-password">
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit"
                class="py-2.5 px-6 rounded-lg text-white font-semibold text-sm hover:opacity-90 transition"
                style="background:linear-gradient(90deg,#818CF8,#7C3AED);">
                Save
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)" class="text-sm text-green-600 font-semibold">
                    Saved.
                </p>
            @endif
        </div>
    </form>
</section>