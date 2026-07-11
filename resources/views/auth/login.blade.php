<x-guest-layout>
<div class="min-h-screen flex bg-gradient-to-br from-slate-900 via-indigo-900 to-slate-900">

    <!-- Left Side -->
    <div class="hidden lg:flex w-1/2 flex-col justify-center px-20 text-white">
        <div>
            <h1 class="text-6xl font-extrabold mb-6">
                JobTracker
            </h1>

            <p class="text-xl text-indigo-100 leading-relaxed mb-10">
                Organize your job applications, monitor interviews,
                and land your dream career faster.
            </p>

            <div class="grid grid-cols-3 gap-5">
                <div class="bg-white/10 backdrop-blur-md p-5 rounded-2xl">
                    <p class="text-3xl font-bold">250+</p>
                    <p class="text-sm text-gray-300">Applications Tracked</p>
                </div>

                <div class="bg-white/10 backdrop-blur-md p-5 rounded-2xl">
                    <p class="text-3xl font-bold">89%</p>
                    <p class="text-sm text-gray-300">Success Rate</p>
                </div>

                <div class="bg-white/10 backdrop-blur-md p-5 rounded-2xl">
                    <p class="text-3xl font-bold">24/7</p>
                    <p class="text-sm text-gray-300">Job Monitoring</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Side -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-6">
        <div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl p-10 shadow-2xl">

            <div class="text-center mb-8">
                <div class="w-20 h-20 mx-auto mb-4 bg-indigo-600 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6M7 4h10a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V6a2 2 0 012-2z"/>
                    </svg>
                </div>

                <h2 class="text-3xl font-bold text-white">
                    Welcome Back
                </h2>

                <p class="text-gray-300 mt-2">
                    Sign in to continue tracking your career journey
                </p>
            </div>

            <x-auth-session-status class="mb-4 text-green-300" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label class="text-gray-200 text-sm">Email</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full mt-2 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:border-indigo-400 focus:ring-indigo-400"
                        placeholder="john@example.com">
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-300"/>
                </div>

                <div class="mt-5">
                    <label class="text-gray-200 text-sm">Password</label>
                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full mt-2 rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:border-indigo-400 focus:ring-indigo-400"
                        placeholder="••••••••">
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-300"/>
                </div>

                <div class="flex justify-between items-center mt-5">
                    <label class="flex items-center text-gray-300 text-sm">
                        <input type="checkbox" name="remember" class="mr-2">
                        Remember me
                    </label>

                    <a href="{{ route('password.request') }}"
                        class="text-indigo-300 hover:text-white text-sm">
                        Forgot Password?
                    </a>
                </div>

                <button
                    class="w-full mt-8 bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-xl font-semibold transition">
                    Log In
                </button>

                <p class="text-center text-gray-300 mt-6">
                    Don't have an account?
                    <a href="{{ route('register') }}"
                        class="text-indigo-300 hover:text-white font-semibold">
                        Register
                    </a>
                </p>
            </form>
        </div>
    </div>
</div>
</x-guest-layout>