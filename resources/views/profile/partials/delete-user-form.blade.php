<section x-data="{ confirmingDeletion: false }">
    <header>
        <h2 class="jt-section-title text-2xl text-red-700">Delete Account</h2>
        <p class="mt-1 text-sm text-gray-500">
            Once your account is deleted, all of its data — including tracked applications — will be permanently gone. Please export anything you want to keep first.
        </p>
    </header>

    <button @click="confirmingDeletion = true"
        class="mt-6 py-2.5 px-6 rounded-lg text-white font-semibold text-sm bg-red-600 hover:bg-red-700 transition">
        Delete Account
    </button>

    <div x-show="confirmingDeletion" x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center p-4"
        style="background: rgba(30,27,60,0.45); backdrop-filter: blur(4px);"
        @click="confirmingDeletion = false">

        <div @click.stop x-show="confirmingDeletion"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            class="w-full max-w-md rounded-2xl p-8 shadow-2xl bg-white">

            <h2 class="text-xl font-bold text-gray-800">Are you sure you want to delete your account?</h2>
            <p class="mt-2 text-sm text-gray-500">
                This is permanent. Enter your password to confirm.
            </p>

            <form method="post" action="{{ route('profile.destroy') }}" class="mt-6 space-y-4">
                @csrf
                @method('delete')

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <div class="flex items-center rounded-lg border-2 border-red-200 bg-white px-4 outline-none focus-within:border-red-500 transition">
                        <span class="text-red-400 mr-3">🔒</span>
                        <input id="password" name="password" type="password" placeholder="Password"
                            class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium">
                    </div>
                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-end gap-3 pt-2">
                    <button type="button" @click="confirmingDeletion = false"
                        class="py-2.5 px-5 rounded-lg text-gray-600 font-semibold text-sm hover:bg-gray-100 transition">
                        Cancel
                    </button>
                    <button type="submit"
                        class="py-2.5 px-5 rounded-lg text-white font-semibold text-sm bg-red-600 hover:bg-red-700 transition">
                        Delete Account
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>