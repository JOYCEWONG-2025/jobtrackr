<x-guest-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<div class="min-h-screen flex bg-gradient-to-br from-[#FFFDF8] via-[#F8FAFC] to-[#EEF2FF] overflow-hidden">

    <!-- Left Side -->
    <div class="hidden lg:flex w-1/2 relative items-center justify-center px-16">

        <!-- Background Decorations -->
        <div class="absolute top-20 left-20 w-40 h-40 bg-blue-200/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 bg-violet-200/40 rounded-full blur-3xl"></div>

        <div class="relative max-w-xl">

            <p class="uppercase tracking-[0.3em] text-xs text-slate-500 mb-4">
                Career Chronicle
            </p>

            <h1
                class="text-6xl leading-none text-slate-800"
                style="font-family:'Playfair Display',serif;"
            >
                Every
                Opportunity
                Has A Story
            </h1>

            <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                Keep your applications, interviews and offers organized in one place.
            </p>

            <!-- Journal Card -->
            <div class="mt-10 bg-white/80 backdrop-blur-sm rounded-[28px] p-6 shadow-xl border border-slate-100">

                <div class="flex items-center justify-between mb-5">
                    <h3 class="font-semibold text-slate-800">
                        Today's Notes
                    </h3>

                    <span class="text-xs text-slate-400">
                        Career Journal
                    </span>
                </div>

                <div class="space-y-4">

                    <div class="flex items-start gap-3">
                        <span class="text-green-500 mt-1">✓</span>
                        <div>
                            <p class="font-medium text-slate-800">
                                PETRONAS Internship
                            </p>
                            <p class="text-sm text-slate-500">
                                Interview Scheduled
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <span class="text-blue-500 mt-1">✓</span>
                        <div>
                            <p class="font-medium text-slate-800">
                                Shell Graduate Programme
                            </p>
                            <p class="text-sm text-slate-500">
                                Application Submitted
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <span class="text-violet-500 mt-1">✓</span>
                        <div>
                            <p class="font-medium text-slate-800">
                                Maybank Analyst
                            </p>
                            <p class="text-sm text-slate-500">
                                Offer Received
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Tiny Editorial Line -->
            <p class="mt-8 text-sm text-slate-400 italic">
                A personal record of opportunities, progress and achievements.
            </p>

        </div>

    </div>

    <!-- Right Side -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">

        <div class="w-full max-w-md bg-[#FFFDF8] rounded-[32px] p-10 shadow-2xl border border-slate-200">

            <div class="text-center">

                <p class="uppercase tracking-[0.25em] text-xs text-slate-400 mb-3">
                    JobTracker
                </p>

                <h2
                    class="text-4xl text-slate-800"
                    style="font-family:'Playfair Display',serif;"
                >
                    Welcome Back
                </h2>

                <p class="text-slate-500 mt-3">
                    Sign in to continue your journey.
                </p>

            </div>

            <x-auth-session-status
                class="mt-6 text-green-600"
                :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="mt-8">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        placeholder="you@example.com"
                        class="w-full rounded-2xl border-slate-300 bg-white focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="mt-5">
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        placeholder="••••••••"
                        class="w-full rounded-2xl border-slate-300 bg-white focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="flex items-center justify-between mt-5">

                    <label class="flex items-center text-sm text-slate-600">
                        <input type="checkbox" name="remember" class="rounded mr-2">
                        Remember me
                    </label>

                    @if (Route::has('password.request'))
                        <a
                            href="{{ route('password.request') }}"
                            class="text-indigo-600 hover:text-indigo-700 text-sm"
                        >
                            Forgot Password?
                        </a>
                    @endif

                </div>

                <button
                    type="submit"
                    class="w-full mt-8 py-3 rounded-2xl bg-gradient-to-r from-indigo-500 to-violet-500 text-white font-semibold hover:opacity-90 transition"
                >
                    Sign In
                </button>

                <div class="text-center mt-6 text-slate-500">

                    Don't have an account?

                    <a
                        href="{{ route('register') }}"
                        class="text-indigo-600 font-semibold hover:text-indigo-700"
                    >
                        Register
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>