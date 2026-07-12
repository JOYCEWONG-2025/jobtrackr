<x-guest-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<div class="min-h-screen flex bg-gradient-to-br from-[#FFFDF8] via-[#DBEAFE] to-[#C7D2FE] overflow-hidden relative">

    <!-- Decorative Background -->
    <div class="absolute inset-0 pointer-events-none">

        <div class="absolute top-16 left-24 text-7xl opacity-10">☁</div>
        <div class="absolute top-40 right-32 text-6xl opacity-10">☁</div>
        <div class="absolute bottom-52 left-32 text-5xl opacity-10">☁</div>

        <div class="absolute top-64 right-24 text-4xl opacity-30 rotate-12">
            ✈
        </div>

        <div class="absolute top-24 right-1/3 text-xl opacity-30">
            ✦
        </div>

        <div class="absolute bottom-60 right-1/4 text-xl opacity-30">
            ✦
        </div>

        <div class="absolute bottom-0 left-0 w-full h-40 bg-gradient-to-t from-[#BFD3FF]/40 to-transparent"></div>

    </div>

    <!-- Left Side -->
    <div class="hidden lg:flex w-1/2 items-center justify-center px-16 relative z-10">

        <div class="max-w-xl">

            <p class="uppercase tracking-[0.35em] text-xs text-slate-500 mb-5">
                Career Chronicle
            </p>

            <h1
                class="text-7xl leading-[0.95] text-slate-800"
                style="font-family:'Playfair Display',serif;"
            >
                Every
                Opportunity
                Has A Story
            </h1>

            <p class="mt-8 text-lg text-slate-600 leading-relaxed max-w-lg">
                Keep your applications, interviews and offers organized in one place.
            </p>

            <div class="mt-10 bg-white/70 backdrop-blur-sm rounded-[30px] p-7 shadow-xl border border-white/50">

                <p class="uppercase tracking-[0.25em] text-xs text-slate-400 mb-5">
                    Career Journal
                </p>

                <div class="space-y-4">

                    <div class="flex gap-3">
                        <span class="text-violet-500">✦</span>
                        <p class="text-slate-600">
                            Every application begins with a possibility.
                        </p>
                    </div>

                    <div class="flex gap-3">
                        <span class="text-blue-500">✦</span>
                        <p class="text-slate-600">
                            Every interview becomes a learning experience.
                        </p>
                    </div>

                    <div class="flex gap-3">
                        <span class="text-indigo-500">✦</span>
                        <p class="text-slate-600">
                            Every offer marks a new chapter.
                        </p>
                    </div>

                </div>

            </div>

            <p class="mt-8 text-sm italic text-slate-400">
                A personal record of opportunities, progress and achievements.
            </p>

        </div>

    </div>

    <!-- Login Card -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 relative z-10">

        <div class="w-full max-w-md bg-[#FFFDF8]/90 backdrop-blur-sm rounded-[32px] p-10 shadow-2xl border border-white/70">

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