<x-guest-layout>

<div class="min-h-screen flex bg-gradient-to-br from-slate-900 via-indigo-900 to-slate-900">

    <!-- Left Section -->
    <div class="hidden lg:flex w-1/2 items-center justify-center px-20 text-white">

        <div>
            <h1 class="text-6xl font-extrabold mb-6">
                JobTracker
            </h1>

            <p class="text-xl text-indigo-100 mb-10 max-w-lg">
                Track applications, interviews, offers and rejections
                in one organized dashboard.
            </p>

            <div class="grid grid-cols-3 gap-5">

                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-5">
                    <div class="text-3xl font-bold">500+</div>
                    <div class="text-sm text-gray-300">Applications</div>
                </div>

                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-5">
                    <div class="text-3xl font-bold">80%</div>
                    <div class="text-sm text-gray-300">Interview Rate</div>
                </div>

                <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-5">
                    <div class="text-3xl font-bold">24/7</div>
                    <div class="text-sm text-gray-300">Monitoring</div>
                </div>

            </div>
        </div>

    </div>

    <!-- Login Card -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">

        <div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl p-10 shadow-2xl">

            <div class="text-center mb-8">

                <div class="w-16 h-16 mx-auto bg-indigo-600 rounded-2xl flex items-center justify-center mb-4">
                    <span class="text-white text-2xl font-bold">JT</span>
                </div>

                <h2 class="text-3xl font-bold text-white">
                    Welcome Back
                </h2>

                <p class="text-gray-300 mt-2">
                    Sign in to continue tracking your career journey
                </p>

            </div>

            <x-auth-session-status
                class="mb-4 text-green-300"
                :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label class="text-white text-sm">
                        Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="w-full mt-2 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="john@example.com">

                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300"/>
                </div>

                <div class="mt-5">
                    <label class="text-white text-sm">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full mt-2 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="••••••••">

                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-300"/>
                </div>

                <div class="flex items-center justify-between mt-5">

                    <label class="flex items-center text-gray-300 text-sm">
                        <input type="checkbox" name="remember" class="mr-2 rounded">
                        Remember me
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                           class="text-indigo-300 hover:text-white">
                            Forgot Password?
                        </a>
                    @endif

                </div>

                <button
                    type="submit"
                    class="w-full mt-8 py-3 bg-indigo-600 hover:bg-indigo-700 rounded-xl text-white font-semibold transition">
                    Log In
                </button>

                <div class="text-center mt-6 text-gray-300">

                    Don't have an account?

                    <a href="{{ route('register') }}"
                       class="text-indigo-300 hover:text-white font-semibold">
                        Register
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>