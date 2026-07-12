<x-guest-layout>
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-purple-50 flex items-center justify-center px-4">
    <div class="w-full max-w-5xl flex rounded-3xl shadow-xl overflow-hidden bg-white">

        <!-- Left Panel -->
        <div class="hidden lg:flex w-1/2 bg-gradient-to-br from-blue-600 via-blue-700 to-purple-700 p-12 flex-col justify-between">
            <div>
                <div class="flex items-center gap-3 mb-12">
                    <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-sm">JT</span>
                    </div>
                    <span class="text-white font-bold text-xl">JobTrackr</span>
                </div>
                <h2 class="text-4xl font-bold text-white leading-tight mb-4">
                    Start tracking<br>your applications.
                </h2>
                <p class="text-blue-100 text-lg">
                    Join thousands of job seekers who stay organized and land their dream roles faster.
                </p>
            </div>
            <div class="space-y-3">
                <div class="flex items-center gap-3 text-blue-100">
                    <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center text-xs">✓</div>
                    Track applications across all platforms
                </div>
                <div class="flex items-center gap-3 text-blue-100">
                    <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center text-xs">✓</div>
                    Monitor interview stages
                </div>
                <div class="flex items-center gap-3 text-blue-100">
                    <div class="w-5 h-5 rounded-full bg-white/20 flex items-center justify-center text-xs">✓</div>
                    Never miss a follow-up
                </div>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="w-full lg:w-1/2 p-10 flex flex-col justify-center">
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Create your account</h2>
                <p class="text-gray-500 text-sm mt-1">Start tracking your job search today</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Full name</label>
                    <input type="text" name="name" value="{{ old('name') }}" required autofocus
                        placeholder="Joyce Wong"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-gray-50 transition">
                    <x-input-error :messages="$errors->get('name')" class="mt-1.5" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        placeholder="you@example.com"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-gray-50 transition">
                    <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                    <input type="password" name="password" required
                        placeholder="Min. 8 characters"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-gray-50 transition">
                    <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Confirm password</label>
                    <input type="password" name="password_confirmation" required
                        placeholder="Repeat your password"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-gray-50 transition">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5" />
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-3 rounded-xl text-sm font-semibold transition shadow-sm">
                    Create account
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-6">
                Already have an account?
                <a href="{{ route('login') }}" class="text-blue-600 hover:text-purple-600 font-semibold transition">Sign in</a>
            </p>
        </div>

    </div>
</div>
</x-guest-layout>