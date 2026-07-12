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
                    Your career journey,<br>organized.
                </h2>
                <p class="text-blue-100 text-lg">
                    Track every application from submission to offer in one clean dashboard.
                </p>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-white/10 rounded-2xl p-4 text-center">
                    <div class="text-2xl font-bold text-white">500+</div>
                    <div class="text-blue-200 text-xs mt-1">Applications</div>
                </div>
                <div class="bg-white/10 rounded-2xl p-4 text-center">
                    <div class="text-2xl font-bold text-white">80%</div>
                    <div class="text-blue-200 text-xs mt-1">Interview Rate</div>
                </div>
                <div class="bg-white/10 rounded-2xl p-4 text-center">
                    <div class="text-2xl font-bold text-white">24/7</div>
                    <div class="text-blue-200 text-xs mt-1">Tracking</div>
                </div>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="w-full lg:w-1/2 p-10 flex flex-col justify-center">
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Welcome back</h2>
                <p class="text-gray-500 text-sm mt-1">Sign in to your JobTrackr account</p>
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        placeholder="you@example.com"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-gray-50 transition">
                    <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                    <input type="password" name="password" required
                        placeholder="••••••••"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-gray-50 transition">
                    <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        Remember me
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-purple-600 font-medium transition">
                            Forgot password?
                        </a>
                    @endif
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-3 rounded-xl text-sm font-semibold transition shadow-sm">
                    Sign in
                </button>
            </form>

            <p class="text-center text-sm text-gray-500 mt-6">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-blue-600 hover:text-purple-600 font-semibold transition">Create one</a>
            </p>
        </div>

    </div>
</div>
</x-guest-layout>