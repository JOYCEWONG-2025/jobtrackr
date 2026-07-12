<x-guest-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<div class="min-h-screen flex relative overflow-hidden" style="background:linear-gradient(180deg,#DBEAFE 0%,#C7D2FE 45%,#FAF7F2 100%);">

    <!-- Paper grain -->
    <div class="absolute inset-0 pointer-events-none opacity-[0.05]"
         style="background-image:radial-gradient(#000 1px,transparent 1px);background-size:3px 3px;"></div>

    <!-- ===== 90s City Pop Skyline — lighter, varied rooftops, pushed low & faded ===== -->
    <svg class="absolute bottom-0 left-0 w-full h-[32%] pointer-events-none opacity-40" viewBox="0 0 1200 380" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="1020" cy="40" r="45" fill="#FDE68A" opacity="0.5"/>
        <g fill="#FFFFFF" opacity="0.5">
            <ellipse cx="200" cy="40" rx="60" ry="14"/>
            <ellipse cx="900" cy="70" rx="50" ry="12"/>
        </g>

        <!-- far row -->
        <g fill="#A5B4FC" opacity="0.5">
            <rect x="0" y="200" width="60" height="180"/>
            <rect x="1140" y="180" width="60" height="200"/>
            <polygon points="1080,380 1080,190 1120,170 1160,190 1160,380"/>
        </g>

        <!-- mid row: varied rooftops (flat / stepped / water-tower / pointed) -->
        <g fill="#818CF8" opacity="0.6">
            <rect x="70" y="230" width="55" height="150"/>
            <rect x="60" y="215" width="20" height="15"/> <!-- water tower box -->
            <rect x="150" y="250" width="70" height="130"/>
            <rect x="160" y="235" width="50" height="15"/> <!-- stepped top -->
            <rect x="980" y="240" width="60" height="140"/>
            <polygon points="1000,240 1010,215 1020,240"/> <!-- pointed roof -->
        </g>

        <!-- near row: darker silhouette, sparse (kept off dead-center so headline stays clear) -->
        <g fill="#6D28D9" opacity="0.75">
            <rect x="850" y="270" width="65" height="110"/>
            <circle cx="882" cy="262" r="10"/> <!-- rooftop tank -->
            <rect x="930" y="290" width="50" height="90"/>
            <polygon points="620,380 645,240 655,240 680,380"/> <!-- retro tower -->
            <rect x="638" y="225" width="24" height="18"/>
        </g>

        <!-- lit windows, sparse -->
        <g fill="#FDE68A" opacity="0.6">
            <rect x="85" y="250" width="5" height="7"/><rect x="97" y="270" width="5" height="7"/>
            <rect x="865" y="290" width="5" height="7"/><rect x="945" y="310" width="5" height="7"/>
            <rect x="995" y="260" width="5" height="7"/>
        </g>
    </svg>

    <!-- Readability scrim behind the copy, independent of skyline -->
    <div class="hidden lg:block absolute top-0 left-0 w-1/2 h-full pointer-events-none"
         style="background:radial-gradient(60% 55% at 40% 40%, rgba(255,253,248,0.55), transparent 70%);"></div>

    <!-- ===== Left Side — Storytelling ===== -->
    <div class="hidden lg:flex w-1/2 items-center justify-center px-16 relative z-10">
        <div class="max-w-xl">

            <div class="border-t-2 border-b border-slate-700/70 py-2 mb-6">
                <p class="uppercase tracking-[0.4em] text-[11px] text-slate-600 text-center">
                    Vol. I &nbsp;•&nbsp; Est. Today &nbsp;•&nbsp; Personal Edition
                </p>
            </div>

            <p class="uppercase tracking-[0.35em] text-xs text-slate-500 mb-3">Career Chronicle</p>

            <h1 class="text-6xl leading-[1.05] text-slate-800" style="font-family:'Playfair Display',serif;">
                Every Opportunity<br>Has A Story
            </h1>

            <p class="mt-6 text-lg text-slate-600 leading-relaxed max-w-lg">
                Keep your applications, interviews and offers organized in one place.
            </p>

            <!-- ===== Interactive Journal Card — click to cycle ===== -->
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
                class="mt-10 relative bg-[#FFFDF8] rounded-sm p-6 shadow-lg border border-slate-200 rotate-[-1deg] cursor-pointer select-none hover:shadow-xl transition-shadow"
                title="Click to see more"
            >
                <div class="absolute -top-3 left-8 w-16 h-5 bg-[#C7D2FE]/70 rotate-[-3deg] rounded-sm shadow-sm"></div>

                <div x-show="show" x-transition.opacity.duration.200ms>
                    <p class="uppercase tracking-[0.25em] text-[11px] text-slate-400 mb-4" style="font-family:'Playfair Display',serif;" x-text="sets[i].title"></p>

                    <div class="space-y-3 text-sm">
                        <template x-for="(item, idx) in sets[i].items" :key="idx">
                            <div class="flex gap-2 items-start">
                                <span
                                    class="mt-0.5"
                                    :class="sets[i].kind === 'log' ? 'text-purple-500' : (sets[i].kind === 'quote' ? 'text-indigo-400' : 'text-slate-400')"
                                    x-text="sets[i].kind === 'log' ? '✓' : (sets[i].kind === 'quote' ? '✦' : '•')"
                                ></span>
                                <p class="text-slate-600" x-text="item"></p>
                            </div>
                        </template>
                    </div>
                </div>

                <p class="mt-4 text-[11px] text-slate-400 italic">tap to flip the page →</p>
            </div>

        </div>
    </div>

    <!-- ===== Right Side — Login Card ===== -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 relative z-10">

        <div class="w-full max-w-md bg-[#FAF7F2] rounded-2xl p-10 shadow-2xl border border-slate-200"
             style="background-image:radial-gradient(#00000008 1px,transparent 1px);background-size:4px 4px;">

            <div class="text-center">
                <p class="uppercase tracking-[0.25em] text-xs text-slate-400 mb-2">JobTracker</p>
                <h2 class="text-4xl text-slate-800" style="font-family:'Playfair Display',serif;">Welcome Back</h2>
                <div class="w-10 h-[2px] bg-[#C7D2FE] mx-auto mt-4"></div>
                <p class="text-slate-500 mt-4 text-sm">Sign in to continue your journey.</p>
            </div>

            <x-auth-session-status class="mt-6 text-green-600" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="mt-8">
                @csrf

                <!-- Underline-style input: Email -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                    <input
                        type="email" name="email" value="{{ old('email') }}" required autofocus
                        placeholder="you@example.com"
                        class="w-full border-0 border-b-2 border-[#C7D2FE] bg-transparent px-1 py-2 text-slate-700 placeholder-slate-400 focus:ring-0 focus:border-[#7C3AED] transition">
                    @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <!-- Underline-style input: Password -->
                <div class="mt-6">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                    <input
                        type="password" name="password" required
                        placeholder="••••••••"
                        class="w-full border-0 border-b-2 border-[#C7D2FE] bg-transparent px-1 py-2 text-slate-700 placeholder-slate-400 focus:ring-0 focus:border-[#7C3AED] transition">
                </div>

                <div class="flex items-center justify-between mt-5">
                    <label class="flex items-center text-sm text-slate-600">
                        <input type="checkbox" name="remember" class="rounded border-slate-300 text-[#7C3AED] mr-2">
                        Remember me
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-[#7C3AED] hover:text-[#6D28D9] text-sm">
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <button
                    type="submit"
                    class="w-full mt-8 py-3 rounded-lg text-white font-semibold hover:opacity-90 transition"
                    style="background:linear-gradient(90deg,#818CF8,#7C3AED);"
                >
                    Sign In
                </button>

                <div class="text-center mt-6 text-slate-500 text-sm">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-[#7C3AED] font-semibold hover:text-[#6D28D9]">
                        Register
                    </a>
                </div>
            </form>

        </div>
    </div>

</div>

</x-guest-layout>