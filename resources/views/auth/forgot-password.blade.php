<x-guest-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-purple-50 flex items-center justify-center px-4">
    <div class="w-full max-w-md">

        <div class="text-center mb-8">
            <div class="flex items-center justify-center gap-2 mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                    <span class="text-white font-bold text-sm">JT</span>
                </div>
                <span class="font-bold text-xl text-gray-900">JobTrackr</span>
            </div>
            <h2 class="text-2xl font-bold text-gray-900">Reset your password</h2>
            <p class="text-gray-500 text-sm mt-2">Enter your email and we'll send you a reset link</p>
        </div>

        <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100">
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        placeholder="you@example.com"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-gray-50 transition">
                    <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-3 rounded-xl text-sm font-semibold transition shadow-sm">
                    Send reset link
                </button>
            </form>
        </div>

        <p class="text-center text-sm text-gray-500 mt-6">
            Remember your password?
            <a href="{{ route('login') }}" class="text-blue-600 hover:text-purple-600 font-semibold transition">Back to sign in</a>
        </p>

    </div>
</div>
</x-guest-layout>