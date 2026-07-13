<x-guest-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    .jt-glass-card { background: rgba(255, 253, 248, 0.75); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px); border: 1px solid rgba(203, 213, 225, 0.5); }
    .jt-card { background: rgba(250, 247, 242, 0.8); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px); }
    .jt-register-pill { background: rgba(255, 255, 255, 0.5); }
    .jt-field::placeholder { color: #94a3b8; opacity: 1; }
    .jt-field { color: #334155; }
</style>

<div class="min-h-screen flex relative overflow-hidden" style="background:linear-gradient(180deg,#DBEAFE 0%,#C7D2FE 45%,#FAF7F2 100%);">

    <!-- Full-page dot-grid overlay (original login style) -->
    <div class="absolute inset-0 pointer-events-none opacity-[0.05]"
         style="background-image:radial-gradient(#000 1px,transparent 1px);background-size:3px 3px;"></div>

    <!-- ===== Skyline ===== -->
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

    <!-- ===== Left Side — Membership Card concept ===== -->
    <div class="hidden lg:flex w-1/2 items-center justify-center px-16 relative z-10">
        <div class="max-w-xl">

            <div class="mb-6">
                <p class="uppercase tracking-[0.4em] text-[11px] text-slate-600 border-b border-slate-700/70 pb-2 inline-block">
                    Vol. II &nbsp;•&nbsp; New Entry &nbsp;•&nbsp; Personal Edition
                </p>
                <p class="uppercase tracking-[0.35em] text-xs font-bold text-slate-500 mt-3">Career Chronicle</p>
            </div>

            <h1 class="text-5xl leading-[1.1] text-slate-800" style="font-family:'Playfair Display',serif;">
                Your Story<br>Starts Here
            </h1>

            <p class="mt-6 text-lg text-slate-600 font-medium leading-relaxed max-w-lg">
                Create your chronicle — one home for every application, interview, and offer.
            </p>

            <!-- ===== Membership / Boarding-pass style card ===== -->
            <div class="jt-glass-card mt-10 relative rounded-xl shadow-xl rotate-[1deg] select-none overflow-hidden">

                <!-- perforated divider -->
                <div class="flex items-center justify-between px-6 pt-5">
                    <p class="uppercase tracking-[0.3em] text-[10px] font-bold text-slate-500">Member Pass</p>
                    <p class="uppercase tracking-[0.2em] text-[10px] font-bold text-purple-600">No. 001</p>
                </div>

                <div class="px-6 py-5">
                    <p class="text-2xl text-slate-800" style="font-family:'Playfair Display',serif;">Career Chronicle</p>
                    <p class="text-xs text-slate-500 mt-1">Personal Edition &nbsp;•&nbsp; Est. Today</p>

                    <div class="mt-5 border-t border-dashed border-slate-400/60 pt-4 flex items-center justify-between">
                        <div class="space-y-1">
                            <p class="text-[10px] uppercase tracking-widest text-slate-400">Status</p>
                            <p class="text-sm font-bold text-purple-700">Newly Registered</p>
                        </div>
                        <div class="flex gap-1">
                            <span class="w-2 h-2 rounded-full bg-[#818CF8]"></span>
                            <span class="w-2 h-2 rounded-full bg-[#A5B4FC]"></span>
                            <span class="w-2 h-2 rounded-full bg-[#C7D2FE]"></span>
                        </div>
                    </div>
                </div>

                <!-- perforation dots along the bottom -->
                <div class="flex justify-between px-3 pb-2">
                    @for ($i = 0; $i < 22; $i++)
                        <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                    @endfor
                </div>
            </div>

        </div>
    </div>

    <!-- ===== Right Side — Register Card ===== -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 relative z-10">

        <div class="jt-card w-full max-w-md rounded-2xl p-10 shadow-2xl border-2 border-slate-900">

            <div class="text-center mb-8">
                <p class="uppercase tracking-[0.25em] text-xs font-bold text-slate-400 mb-2">JobTracker</p>
                <h2 class="text-4xl text-slate-800 font-semibold drop-shadow-[0_2px_10px_rgba(255,253,248,0.3)]" style="font-family:'Playfair Display',serif;">Create Your Account</h2>
                <div class="w-10 h-[2px] bg-[#C7D2FE] mx-auto mt-4"></div>
                <p class="text-slate-600 font-semibold mt-4 text-sm">Start tracking your job search today</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name</label>
                    <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                        <span class="text-[#818CF8] mr-3">🖊</span>
                        <input type="text" name="name" value="{{ old('name') }}" required autofocus
                            placeholder="Joyce Wong"
                            class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium">
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-1.5" />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                    <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                        <span class="text-[#818CF8] mr-3">✉</span>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            placeholder="you@example.com"
                            class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                    <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                        <span class="text-[#818CF8] mr-3">🔒</span>
                        <input type="password" name="password" required
                            placeholder="Min. 8 characters"
                            class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium">
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Confirm Password</label>
                    <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                        <span class="text-[#818CF8] mr-3">🔒</span>
                        <input type="password" name="password_confirmation" required
                            placeholder="Repeat your password"
                            class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium">
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5" />
                </div>

                <button type="submit"
                    class="w-full py-3 rounded-lg text-white font-bold hover:opacity-90 transition"
                    style="background:linear-gradient(90deg,#818CF8,#7C3AED);">
                    Create Account
                </button>
            </form>

            <p class="jt-register-pill mt-6 text-center text-sm text-slate-700 rounded-full py-2.5 px-4">
                Already have an account?
                <a href="{{ route('login') }}" class="text-slate-900 font-semibold hover:underline">Sign In</a>
            </p>

        </div>
    </div>

</div>

</x-guest-layout>