<x-guest-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<div class="min-h-screen flex relative overflow-hidden" style="background:linear-gradient(180deg,#DBEAFE 0%,#C7D2FE 45%,#FAF7F2 100%);">

    <!-- Dot-grid overlay — grid look up top, dot look on the flat footer -->
    <div class="absolute inset-0 pointer-events-none opacity-[0.05]"
         style="background-image:radial-gradient(#000 1px,transparent 1px);background-size:3px 3px;"></div>

    <!-- ===== 90s City Pop Skyline (full density, from the first code) ===== -->
    <svg class="absolute bottom-0 left-0 w-full h-[55%] pointer-events-none" viewBox="0 0 1200 500" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="skyFade" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#C7D2FE" stop-opacity="0"/>
                <stop offset="100%" stop-color="#818CF8" stop-opacity="0.25"/>
            </linearGradient>
        </defs>
        <rect x="0" y="0" width="1200" height="500" fill="url(#skyFade)"/>

        <circle cx="1000" cy="90" r="55" fill="#FDE68A" opacity="0.55"/>
        <circle cx="1000" cy="90" r="55" fill="none" stroke="#F5D28C" stroke-width="1" opacity="0.4"/>

        <g fill="#FFFFFF" opacity="0.55">
            <ellipse cx="180" cy="70" rx="70" ry="18"/>
            <ellipse cx="230" cy="60" rx="50" ry="15"/>
            <ellipse cx="820" cy="130" rx="60" ry="14"/>
            <ellipse cx="870" cy="120" rx="40" ry="12"/>
        </g>

        <g fill="#A5B4FC" opacity="0.55">
            <rect x="0" y="260" width="70" height="240"/>
            <rect x="90" y="220" width="55" height="280"/>
            <rect x="170" y="280" width="90" height="220"/>
            <rect x="950" y="230" width="60" height="270"/>
            <rect x="1030" y="260" width="80" height="240"/>
            <rect x="1120" y="200" width="70" height="300"/>
        </g>

        <g fill="#818CF8" opacity="0.7">
            <rect x="40" y="300" width="60" height="200"/>
            <rect x="260" y="240" width="45" height="260"/>
            <rect x="320" y="310" width="100" height="190"/>
            <rect x="880" y="290" width="70" height="210"/>
            <rect x="760" y="250" width="55" height="250"/>
        </g>

        <g fill="#6D28D9" opacity="0.85">
            <rect x="120" y="340" width="80" height="160"/>
            <rect x="220" y="360" width="50" height="140"/>
            <rect x="420" y="300" width="90" height="200"/>
            <rect x="520" y="380" width="60" height="120"/>
            <polygon points="620,500 645,320 655,320 680,500"/>
            <rect x="638" y="300" width="24" height="22"/>
            <rect x="700" y="350" width="70" height="150"/>
            <rect x="800" y="320" width="55" height="180"/>
            <rect x="900" y="370" width="75" height="130"/>
            <rect x="1000" y="330" width="60" height="170"/>
            <rect x="1090" y="360" width="90" height="140"/>
        </g>

        <g fill="#FDE68A" opacity="0.7">
            <rect x="135" y="360" width="6" height="8"/><rect x="150" y="380" width="6" height="8"/>
            <rect x="440" y="330" width="6" height="8"/><rect x="460" y="360" width="6" height="8"/><rect x="480" y="390" width="6" height="8"/>
            <rect x="715" y="380" width="6" height="8"/><rect x="740" y="410" width="6" height="8"/>
            <rect x="815" y="350" width="6" height="8"/><rect x="830" y="400" width="6" height="8"/>
            <rect x="1020" y="360" width="6" height="8"/><rect x="1110" y="390" width="6" height="8"/>
        </g>
    </svg>

    <!-- ===== Left Side — Storytelling ===== -->
    <div class="hidden lg:flex w-1/2 items-center justify-center px-16 relative z-10">
        <div class="max-w-xl">

            <!-- Masthead — no frame, plain text, underline below (first-code font family) -->
            <div class="border-b border-slate-700/70 pb-2 mb-6">
                <p class="uppercase tracking-[0.4em] text-[11px] text-slate-600 text-center">
                    Vol. I &nbsp;•&nbsp; Est. Today &nbsp;•&nbsp; Personal Edition
                </p>
            </div>

            <p class="uppercase tracking-[0.35em] text-xs font-bold text-slate-600 mb-3 bg-[#FFFDF8]/60 inline-block px-2 rounded">Career Chronicle</p>

            <h1 class="text-6xl leading-[1.05] text-slate-900 font-semibold drop-shadow-[0_2px_10px_rgba(255,253,248,0.9)]" style="font-family:'Playfair Display',serif;">
                Every Opportunity<br>Has A Story
            </h1>

            <p class="mt-6 text-lg text-slate-700 font-medium leading-relaxed max-w-lg bg-[#FFFDF8]/55 backdrop-blur-[2px] rounded-lg px-3 py-2 inline-block">
                Keep your applications, interviews and offers organized in one place.
            </p>

            <!-- ===== Today's Notes — translucent glass card ===== -->
            <div
                x-data="{
                    sets: [
                        { title: 'Today\'s Notes', kind: 'tasks', items: [
                            'Follow up on pending applications',
                            'Prepare for upcoming interviews',
                            'Review recent opportunities'
                        ]},
                        { title: 'Career Journal', kind: 'quote', items: [
                            'Every application begins with a possibility.',
                            'Every interview becomes a learning experience.',
                            'Every offer marks a new chapter.'
                        ]},
                        { title: 'Today\'s Notes', kind: 'log', items: [
                            'PETRONAS Internship — Interview Scheduled',
                            'Shell Graduate Program — Application Submitted',
                            'Maybank Analyst — Offer Received'
                        ]},
                        { title: 'Today\'s Notes', kind: 'log', items: [
                            'Google APAC — Application Submitted',
                            'Grab Associate — Interview Scheduled',
                            'AirAsia Digital — Offer Received'
                        ]}
                    ],
                    i: 0,
                    show: true,
                    next() {
                        this.show = false;
                        setTimeout(() => { this.i = (this.i + 1) % this.sets.length; this.show = true; }, 150);
                    }
                }"
                @click="next()"
                class="mt-10 relative bg-white/25 backdrop-blur-md rounded-2xl p-6 border border-white/50 shadow-xl rotate-[-1deg] cursor-pointer select-none hover:shadow-2xl transition-shadow"
                title="Click to see more"
            >
                <div x-show="show" x-transition.opacity.duration.200ms>
                    <p class="uppercase tracking-[0.25em] text-[11px] font-bold text-slate-800" style="font-family:'Playfair Display',serif;" x-text="sets[i].title"></p>

                    <div class="space-y-3 text-sm mt-4">
                        <template x-for="(item, idx) in sets[i].items" :key="idx">
                            <div class="flex gap-2 items-start">
                                <span
                                    class="mt-0.5 font-bold"
                                    :class="sets[i].kind === 'log' ? 'text-purple-700' : (sets[i].kind === 'quote' ? 'text-indigo-600' : 'text-slate-600')"
                                    x-text="sets[i].kind === 'log' ? '✓' : (sets[i].kind === 'quote' ? '✦' : '•')"
                                ></span>
                                <p class="text-slate-900 font-medium" x-text="item"></p>
                            </div>
                        </template>
                    </div>

                    <p class="mt-4 text-[11px] text-slate-600 italic">tap to flip the page →</p>
                </div>
            </div>

        </div>
    </div>

    <!-- ===== Right Side — Login Card ===== -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 relative z-10">

        <div class="w-full max-w-md bg-white/25 backdrop-blur-md rounded-[32px] p-10 border border-white/50 shadow-2xl">

            <div class="text-center bg-white/40 rounded-2xl px-6 py-5">
                <p class="uppercase tracking-[0.25em] text-xs font-semibold text-slate-500 mb-2">JobTracker</p>
                <h2 class="text-4xl text-slate-800" style="font-family:'Playfair Display',serif;">Welcome Back</h2>
                <p class="text-slate-600 font-medium mt-3">Sign in to continue your journey.</p>
            </div>

            <x-auth-session-status class="mt-6 text-green-600" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="mt-8">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                    <div class="flex items-center rounded-full border-2 border-slate-300 bg-white px-5 outline-none focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-100 transition">
                        <span class="text-indigo-400 mr-3">✉</span>
                        <input
                            type="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="you@example.com"
                            class="w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 text-slate-700 placeholder-slate-400">
                    </div>
                    @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <div class="mt-5">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                    <div class="flex items-center rounded-full border-2 border-slate-300 bg-white px-5 outline-none focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-100 transition">
                        <span class="text-indigo-400 mr-3">🔒</span>
                        <input
                            type="password" name="password" required
                            placeholder="••••••••"
                            class="w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 text-slate-700 placeholder-slate-400">
                    </div>
                </div>

                <div class="flex items-center justify-between mt-5">
                    <label class="flex items-center text-sm text-slate-600">
                        <input type="checkbox" name="remember" class="rounded mr-2">
                        Remember me
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-indigo-600 hover:text-indigo-700 text-sm">
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <button
                    type="submit"
                    class="w-full mt-8 py-3 rounded-full bg-gradient-to-r from-indigo-500 to-violet-500 text-white font-semibold hover:opacity-90 transition"
                >
                    Sign In
                </button>

                <div class="text-center mt-6 bg-white/50 rounded-full py-2 text-slate-700 text-sm">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-indigo-600 font-semibold hover:text-indigo-700">
                        Register
                    </a>
                </div>
            </form>

        </div>
    </div>

</div>

</x-guest-layout>