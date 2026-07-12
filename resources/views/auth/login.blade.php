<x-guest-layout>

<div class="min-h-screen flex bg-gradient-to-br from-slate-900 via-indigo-900 to-purple-900 relative overflow-hidden">

    <!-- Background Effects -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>

    <!-- Left Section -->
    <div class="hidden lg:flex w-1/2 items-center justify-center px-20 text-white relative z-10">

        <div>

            <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-md text-blue-200 text-sm mb-6 border border-white/10">
                ✨ Smart Career Management
            </div>

            <h1 class="text-6xl font-extrabold mb-6 leading-tight">
                Track Your Career Journey
            </h1>

            <p class="text-xl text-indigo-100 mb-10 max-w-lg">
                Stay organized throughout your job search journey — from first application to final offer.
            </p>

            <!-- Dashboard Preview -->
            <div class="bg-white/10 backdrop-blur-xl rounded-3xl p-6 border border-white/10 shadow-2xl">

                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-semibold text-lg">
                        Career Overview
                    </h3>

                    <span class="text-green-300 text-sm">
                        ● Active
                    </span>
                </div>

                <div class="grid grid-cols-3 gap-4">

                    <div class="bg-white/10 rounded-2xl p-4">
                        <p class="text-xs uppercase tracking-wider text-gray-300">
                            Applied
                        </p>
                        <p class="text-3xl font-bold mt-2">
                            24
                        </p>
                    </div>

                    <div class="bg-white/10 rounded-2xl p-4">
                        <p class="text-xs uppercase tracking-wider text-gray-300">
                            Interviews
                        </p>
                        <p class="text-3xl font-bold mt-2 text-blue-300">
                            5
                        </p>
                    </div>

                    <div class="bg-white/10 rounded-2xl p-4">
                        <p class="text-xs uppercase tracking-wider text-gray-300">
                            Offers
                        </p>
                        <p class="text-3xl font-bold mt-2 text-purple-300">
                            2
                        </p>
                    </div>

                </div>

                <div class="mt-6 bg-white/5 rounded-2xl p-4">

                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-300">Success Progress</span>
                        <span class="text-white">68%</span>
                    </div>

                    <div class="h-2 bg-white/10 rounded-full">
                        <div class="h-2 w-2/3 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full"></div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Login Card -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 relative z-10">

        <div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl p-10 shadow-2xl">

            <div class="text-center mb-8">

                <div class="w-16 h-16 mx-auto bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl flex items-center justify-center mb-4 shadow-lg">
                    <span class="text-white text-2xl font-bold">JT</span>
                </div>

                <h2 class="text-3xl font-bold text-white">
                    Welcome Back 👋
                </h2>

                <p class="text-gray-300 mt-2">
                    Access your applications, interviews and opportunities.
                </p>

            </div>

            <x-auth-session-status
                class="mb-4 text-green-300"
                :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label class="text-white text-sm mb-2 block">
                        Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        placeholder="john@example.com"
                        class="w-full rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mt-5">
                    <label class="text-white text-sm mb-2 block">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        placeholder="••••••••"
                        class="w-full rounded-xl bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="flex items-center justify-between mt-5">

                    <label class="flex items-center text-gray-300 text-sm">
                        <input type="checkbox" name="remember" class="mr-2 rounded">
                        Remember me
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                           class="text-blue-300 hover:text-white text-sm">
                            Forgot Password?
                        </a>
                    @endif

                </div>

                <button
                    type="submit"
                    class="w-full mt-8 py-3 bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 rounded-xl text-white font-semibold transition">
                    Log In
                </button>

                <div class="text-center mt-6 text-gray-300">

                    Don't have an account?

                    <a href="{{ route('register') }}"
                       class="text-blue-300 hover:text-white font-semibold">
                        Register
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>