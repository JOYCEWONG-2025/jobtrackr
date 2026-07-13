<x-guest-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    /* Guaranteed-to-render fallbacks — independent of Tailwind's compiled utility classes */
    .jt-glass-card {
        background: rgba(255, 253, 248, 0.75);
        -webkit-backdrop-filter: blur(8px);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(203, 213, 225, 0.5);
    }
    .jt-register-pill {
        background: rgba(255, 255, 255, 0.5);
    }
    .jt-field::placeholder {
        color: #94a3b8;
        opacity: 1;
    }
    .jt-field {
        color: #334155;
    }
</style>

<div class="min-h-screen flex relative overflow-hidden" style="background:linear-gradient(180deg,#DBEAFE 0%,#C7D2FE 45%,#FAF7F2 100%);">

    <!-- ===== Background Textures ===== -->

    <!-- Header Layer: Moiré Grid Pattern -->
    <div class="absolute top-0 left-0 w-full h-[45%] pointer-events-none opacity-[0.05]"
         style="background-image: linear-gradient(#000 1px, transparent 1px), linear-gradient(90deg, #000 1px, transparent 1px); background-size: 3px 3px;"></div>

    <!-- Footer Layer: Clean Repeating Dot Pattern -->
    <div class="absolute bottom-0 left-0 w-full h-[12%] pointer-events-none opacity-[0.07]"
         style="background-image: radial-gradient(#000 1.5px, transparent 1.5px); background-size: 8px 8px;"></div>

    <!-- ===== 90s City Pop Skyline (SVG) ===== -->
    <svg class="absolute bottom-0 left-0 w-full h-[55%] pointer-events-none opacity-60" viewBox="0 0 1200 500" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="1000" cy="90" r="55" fill="#FDE68A" opacity="0.55"/>
        <g fill="#FFFFFF" opacity="0.55">
            <ellipse cx="180" cy="70" rx="70" ry="18"/>
            <ellipse cx="230" cy="60" rx="50" ry="15"/>
            <ellipse cx="820" cy="130" rx="60" ry="14"/>
            <ellipse cx="870" cy="120" rx="40" ry="12"/>
        </g>
        <g fill="#A5B4FC" opacity="0.5">
            <rect x="0" y="260" width="70" height="240"/>
            <rect x="90" y="220" width="55" height="280"/>
            <rect x="170" y="280" width="90" height="220"/>
            <rect x="950" y="230" width="60" height="270"/>
            <rect x="1030" y="260" width="80" height="240"/>
            <rect x="1120" y="200" width="70" height="300"/>
        </g>
        <g fill="#818CF8" opacity="0.55">
            <rect x="40" y="300" width="60" height="200"/>
            <rect x="260" y="240" width="45" height="260"/>
            <rect x="320" y="310" width="100" height="190"/>
            <rect x="880" y="290" width="70" height="210"/>
            <rect x="760" y="250" width="55" height="250"/>
        </g>
        <g fill="#6D28D9" opacity="0.65">
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
        <g fill="#FDE68A" opacity="0.6">
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

            <div class="mb-6">
                <p class="uppercase tracking-[0.4em] text-[11px] text-slate-600 border-b border-slate-700/70 pb-2 inline-block">
                    Vol. I &nbsp;•&nbsp; Est. Today &nbsp;•&nbsp; Personal Edition
                </p>
                <p class="uppercase tracking-[0.35em] text-xs font-bold text-slate-500 mt-3">Career Chronicle</p>
            </div>

            <h1 class="text-6xl leading-[1.05] text-slate-800" style="font-family:'Playfair Display',serif;">
                Every Opportunity<br>Has A Story
            </h1>

            <p class="mt-6 text-lg text-slate-600 font-medium leading-relaxed max-w-lg">
                Keep your applications, interviews and offers organized in one place.
            </p>

            <!-- ===== Interactive Journal Card — auto-cycles, glass now guaranteed to render ===== -->
            <div
                x-data="{
                    sets: [
                        { title: 'Career Journal', kind: 'log', items: [
                            'Every application begins with a possibility.',
                            'Every interview becomes a learning experience.',
                            'Every offer marks a new chapter.'
                        ]},
                        { title: 'Today\'s Notes', kind: 'log', items: [
                            'Google APAC — Application Submitted',
                            'Grab Associate — Interview Scheduled',
                            'AirAsia Digital — Offer Received'
                        ]},
                        { title: 'Today\'s Notes', kind: 'tasks', items: [
                            'Follow up on pending applications',
                            'Prepare for upcoming interviews',
                            'Review recent opportunities'
                        ]},
                        { title: 'Today\'s Notes', kind: 'quote', items: [
                            'PETRONAS Internship — Interview Scheduled',
                            'Shell Graduate Program — Application Submitted',
                            'Maybank Analyst — Offer Received'
                        ]}
                    ],
                    i: 0,
                    show: true,
                    next() {
                        this.show = false;
                        setTimeout(() => { this.i = (this.i + 1) % this.sets.length; this.show = true; }, 150);
                    }
                }"
                x-init="setInterval(() => next(), 4000)"
                class="jt-glass-card mt-10 relative rounded-xl p-6 shadow-xl rotate-[-1deg] select-none"
            >
                <div class="absolute -top-3 left-8 w-16 h-5 bg-[#C7D2FE]/70 rotate-[-3deg] rounded-sm shadow-sm"></div>

                <div x-show="show" x-transition.opacity.duration.300ms>
                    <div class="flex items-center gap-2 mb-4">
                        <p class="uppercase tracking-[0.25em] text-xs font-bold text-slate-800 whitespace-nowrap" style="font-family:'Playfair Display',serif;" x-text="sets[i].title"></p>
                    </div>

                    <div class="space-y-3 text-sm">
                        <template x-for="(item, idx) in sets[i].items" :key="idx">
                            <div class="flex gap-2 items-start">
                                <span
                                    class="mt-0.5 font-bold"
                                    :class="sets[i].kind === 'log' ? 'text-purple-600' : (sets[i].kind === 'quote' ? 'text-indigo-500' : 'text-slate-500')"
                                    x-text="sets[i].kind === 'log' ? '✓' : (sets[i].kind === 'quote' ? '✦' : '•')"
                                ></span>
                                <p class="text-slate-800 font-semibold" x-text="item"></p>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="flex gap-1.5 mt-4">
                    <template x-for="(s, idx) in sets" :key="idx">
                        <span class="h-1.5 rounded-full transition-all duration-300"
                              :class="idx === i ? 'w-4 bg-[#7C3AED]' : 'w-1.5 bg-slate-300'"></span>
                    </template>
                </div>
            </div>

        </div>
    </div>

    <!-- ===== Right Side — Login Card ===== -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 relative z-10">

        <div class="w-full max-w-md bg-[#FAF7F2]/80 backdrop-blur-md rounded-2xl p-10 shadow-2xl border-2 border-slate-900">

            <div class="text-center">
                <p class="uppercase tracking-[0.25em] text-xs font-bold text-slate-400 mb-2">JobTracker</p>
                <h2 class="text-6xl text-slate-800 font-semibold drop-shadow-[0_2px_10px_rgba(255,253,248,0.3)]" style="font-family:'Playfair Display',serif;">Welcome Back</h2>
                <div class="w-10 h-[2px] bg-[#C7D2FE] mx-auto mt-4"></div>
                <p class="text-slate-600 font-semibold mt-4 text-sm">Sign in to continue your journey.</p>
            </div>

            <x-auth-session-status class="mt-6 text-green-600" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="mt-8">
                @csrf

                <!-- Framed Input: Email — placeholder now guaranteed via .jt-field -->
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                    <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                        <span class="text-[#818CF8] mr-3">✉</span>
                        <input
                            type="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="you@example.com"
                            class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium">
                    </div>
                    @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <!-- Framed Input: Password — placeholder now guaranteed via .jt-field -->
                <div class="mt-5">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                    <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                        <span class="text-[#818CF8] mr-3">🔒</span>
                        <input
                            type="password" name="password" required
                            placeholder="••••••••"
                            class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium">
                    </div>
                </div>

                <div class="flex items-center justify-between mt-5">
                    <label class="flex items-center text-sm font-semibold text-slate-600">
                        <input type="checkbox" name="remember" class="rounded border-slate-300 text-[#7C3AED] mr-2">
                        Remember me
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-[#7C3AED] hover:text-[#6D28D9] font-semibold text-sm">
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <button
                    type="submit"
                    class="w-full mt-8 py-3 rounded-lg text-white font-bold hover:opacity-90 transition"
                    style="background:linear-gradient(90deg,#818CF8,#7C3AED);"
                >
                    Sign In
                </button>

                <!-- Register line — glass pill now guaranteed via .jt-register-pill -->
                <p class="jt-register-pill mt-6 text-center text-sm text-slate-700 rounded-full py-2.5 px-4">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-slate-900 font-semibold hover:underline">
                        Register
                    </a>
                </p>
            </form>

        </div>
    </div>

</div>

</x-guest-layout>