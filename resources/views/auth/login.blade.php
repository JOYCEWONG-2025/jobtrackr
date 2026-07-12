<x-guest-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<div class="min-h-screen flex relative overflow-hidden" style="background:linear-gradient(180deg,#DBEAFE 0%,#C7D2FE 45%,#FAF7F2 100%);">

    <!-- Paper grain overlay -->
    <div class="absolute inset-0 pointer-events-none opacity-[0.05]"
         style="background-image:radial-gradient(#000 1px,transparent 1px);background-size:3px 3px;"></div>

    <!-- ===== 90s City Pop Skyline (SVG) ===== -->
    <svg class="absolute bottom-0 left-0 w-full h-[55%] pointer-events-none" viewBox="0 0 1200 500" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="skyFade" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#C7D2FE" stop-opacity="0"/>
                <stop offset="100%" stop-color="#818CF8" stop-opacity="0.25"/>
            </linearGradient>
        </defs>
        <rect x="0" y="0" width="1200" height="500" fill="url(#skyFade)"/>

        <!-- sun/moon -->
        <circle cx="1000" cy="90" r="55" fill="#FDE68A" opacity="0.55"/>
        <circle cx="1000" cy="90" r="55" fill="none" stroke="#F5D28C" stroke-width="1" opacity="0.4"/>

        <!-- clouds -->
        <g fill="#FFFFFF" opacity="0.55">
            <ellipse cx="180" cy="70" rx="70" ry="18"/>
            <ellipse cx="230" cy="60" rx="50" ry="15"/>
            <ellipse cx="820" cy="130" rx="60" ry="14"/>
            <ellipse cx="870" cy="120" rx="40" ry="12"/>
        </g>

        <!-- far buildings (lavender) -->
        <g fill="#A5B4FC" opacity="0.55">
            <rect x="0" y="260" width="70" height="240"/>
            <rect x="90" y="220" width="55" height="280"/>
            <rect x="170" y="280" width="90" height="220"/>
            <rect x="950" y="230" width="60" height="270"/>
            <rect x="1030" y="260" width="80" height="240"/>
            <rect x="1120" y="200" width="70" height="300"/>
        </g>

        <!-- mid buildings (indigo) -->
        <g fill="#818CF8" opacity="0.7">
            <rect x="40" y="300" width="60" height="200"/>
            <rect x="260" y="240" width="45" height="260"/>
            <rect x="320" y="310" width="100" height="190"/>
            <rect x="880" y="290" width="70" height="210"/>
            <rect x="760" y="250" width="55" height="250"/>
        </g>

        <!-- foreground skyline (deep purple silhouette, Conan/Sailor Moon night-city vibe) -->
        <g fill="#6D28D9" opacity="0.85">
            <rect x="120" y="340" width="80" height="160"/>
            <rect x="220" y="360" width="50" height="140"/>
            <rect x="420" y="300" width="90" height="200"/>
            <rect x="520" y="380" width="60" height="120"/>
            <!-- tower (retro tokyo-tower silhouette) -->
            <polygon points="620,500 645,320 655,320 680,500"/>
            <rect x="638" y="300" width="24" height="22"/>
            <rect x="700" y="350" width="70" height="150"/>
            <rect x="800" y="320" width="55" height="180"/>
            <rect x="900" y="370" width="75" height="130"/>
            <rect x="1000" y="330" width="60" height="170"/>
            <rect x="1090" y="360" width="90" height="140"/>
        </g>

        <!-- lit windows -->
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

            <!-- Tabloid Masthead -->
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

            <!-- Journal Sticky Note -->
            <div class="mt-10 relative bg-[#FFFDF8] rounded-sm p-6 shadow-lg border border-slate-200 rotate-[-1deg]">
                <div class="absolute -top-3 left-8 w-16 h-5 bg-[#C7D2FE]/70 rotate-[-3deg] rounded-sm shadow-sm"></div>

                <p class="uppercase tracking-[0.25em] text-[11px] text-slate-400 mb-4" style="font-family:'Playfair Display',serif;">
                    Today's Notes
                </p>

                <div class="space-y-3 text-sm">
                    <div class="flex gap-2 items-start">
                        <span class="text-purple-500 mt-0.5">✓</span>
                        <p class="text-slate-600">PETRONAS Internship — <span class="text-slate-500">Interview Scheduled</span></p>
                    </div>
                    <div class="flex gap-2 items-start">
                        <span class="text-indigo-500 mt-0.5">✓</span>
                        <p class="text-slate-600">Shell Graduate Program — <span class="text-slate-500">Application Submitted</span></p>
                    </div>
                    <div class="flex gap-2 items-start">
                        <span class="text-blue-500 mt-0.5">✓</span>
                        <p class="text-slate-600">Maybank Analyst — <span class="text-slate-500">Offer Received</span></p>
                    </div>
                </div>
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

                <!-- Framed Input: Email -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Email Address</label>
                    <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 focus-within:border-[#7C3AED] transition">
                        <span class="text-[#818CF8] mr-3">✉</span>
                        <input
                            type="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="you@example.com"
                            class="w-full py-3 border-0 bg-transparent focus:ring-0 text-slate-700 placeholder-slate-400">
                    </div>
                    @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
                </div>

                <!-- Framed Input: Password -->
                <div class="mt-5">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                    <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 focus-within:border-[#7C3AED] transition">
                        <span class="text-[#818CF8] mr-3">🔒</span>
                        <input
                            type="password" name="password" required
                            placeholder="••••••••"
                            class="w-full py-3 border-0 bg-transparent focus:ring-0 text-slate-700 placeholder-slate-400">
                    </div>
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