<x-guest-layout>

<div class="min-h-screen flex">

    <!-- Left -->
    <div class="hidden lg:flex w-1/2 items-center justify-center px-20">

        <div class="max-w-xl">

            <span class="px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium">
                JobTracker
            </span>

            <h1 class="mt-6 text-6xl font-bold text-slate-900 leading-tight">
                Track Your Career Journey
            </h1>

            <p class="mt-6 text-lg text-slate-600">
                Stay organized from application to offer letter.
            </p>

            <div class="mt-10 bg-white rounded-3xl p-6 shadow-xl border border-slate-100">

                <div class="flex justify-between">
                    <div>
                        <p class="text-slate-500 text-sm">Applications</p>
                        <h3 class="text-3xl font-bold">24</h3>
                    </div>

                    <div>
                        <p class="text-slate-500 text-sm">Interviews</p>
                        <h3 class="text-3xl font-bold text-blue-600">5</h3>
                    </div>

                    <div>
                        <p class="text-slate-500 text-sm">Offers</p>
                        <h3 class="text-3xl font-bold text-violet-600">2</h3>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Right -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">

        <div class="w-full max-w-md bg-white rounded-3xl p-10 shadow-2xl border border-slate-100">

            <div class="text-center">

                <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-r from-blue-500 to-violet-500 flex items-center justify-center text-white font-bold text-xl">
                    JT
                </div>

                <h2 class="mt-4 text-3xl font-bold text-slate-900">
                    Welcome Back
                </h2>

                <p class="mt-2 text-slate-500">
                    Sign in to continue
                </p>

            </div>

            <form method="POST" action="{{ route('login') }}" class="mt-8">
                @csrf

                <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                    required
                    class="w-full rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500">

                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    required
                    class="w-full mt-4 rounded-xl border-slate-200 focus:border-blue-500 focus:ring-blue-500">

                <div class="flex justify-between items-center mt-4 text-sm">

                    <label class="flex items-center gap-2 text-slate-500">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>

                    <a href="{{ route('password.request') }}"
                       class="text-blue-600 hover:text-blue-700">
                        Forgot Password?
                    </a>

                </div>

                <button
                    type="submit"
                    class="w-full mt-6 py-3 rounded-xl bg-gradient-to-r from-blue-500 to-violet-500 text-white font-semibold">
                    Log In
                </button>

                <p class="text-center mt-6 text-slate-500">
                    Don't have an account?

                    <a href="{{ route('register') }}"
                       class="text-blue-600 font-semibold">
                        Register
                    </a>
                </p>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>