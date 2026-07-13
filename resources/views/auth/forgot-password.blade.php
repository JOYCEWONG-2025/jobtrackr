<x-guest-layout>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    .jt-card { background: rgba(250, 247, 242, 0.8); -webkit-backdrop-filter: blur(8px); backdrop-filter: blur(8px); }
    .jt-register-pill { background: rgba(255, 255, 255, 0.5); }
    .jt-field::placeholder { color: #94a3b8; opacity: 1; }
    .jt-field { color: #334155; }
</style>

<div class="min-h-screen flex items-center justify-center relative overflow-hidden px-4" style="background:linear-gradient(180deg,#DBEAFE 0%,#C7D2FE 45%,#FAF7F2 100%);">

    <!-- Header Layer: Moiré Grid Pattern -->
    <div class="absolute top-0 left-0 w-full h-[45%] pointer-events-none opacity-[0.05]"
         style="background-image: linear-gradient(#000 1px, transparent 1px), linear-gradient(90deg, #000 1px, transparent 1px); background-size: 3px 3px;"></div>

    <!-- Footer Layer: Dot Pattern -->
    <div class="absolute bottom-0 left-0 w-full h-[12%] pointer-events-none opacity-[0.07]"
         style="background-image: radial-gradient(#000 1.5px, transparent 1.5px); background-size: 8px 8px;"></div>

    <!-- ===== Skyline ===== -->
    <svg class="absolute bottom-0 left-0 w-full h-[45%] pointer-events-none opacity-60" viewBox="0 0 1200 500" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
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
    </svg>

    <div class="w-full max-w-md relative z-10">

        <div class="text-center mb-8">
            <p class="uppercase tracking-[0.25em] text-xs font-bold text-slate-500 mb-2">JobTracker</p>
            <h2 class="text-4xl text-slate-800 font-semibold drop-shadow-[0_2px_10px_rgba(255,253,248,0.3)]" style="font-family:'Playfair Display',serif;">Reset Your Password</h2>
            <div class="w-10 h-[2px] bg-[#C7D2FE] mx-auto mt-4"></div>
            <p class="text-slate-600 font-semibold mt-4 text-sm">Enter your email and we'll send you a reset link</p>
        </div>

        <div class="jt-card rounded-2xl p-10 shadow-2xl border-2 border-slate-900">

            <x-auth-session-status class="mb-4 text-green-600" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                    <div class="flex items-center rounded-lg border-2 border-[#C7D2FE] bg-white px-4 outline-none focus-within:border-[#7C3AED] transition">
                        <span class="text-[#818CF8] mr-3">✉</span>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="you@example.com"
                            class="jt-field w-full py-3 border-0 bg-transparent outline-none focus:outline-none focus:ring-0 font-medium">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                </div>

                <button type="submit"
                    class="w-full py-3 rounded-lg text-white font-bold hover:opacity-90 transition"
                    style="background:linear-gradient(90deg,#818CF8,#7C3AED);">
                    Send Reset Link
                </button>
            </form>
        </div>

        <p class="jt-register-pill mt-6 text-center text-sm text-slate-700 rounded-full py-2.5 px-4">
            Remember your password?
            <a href="{{ route('login') }}" class="text-slate-900 font-semibold hover:underline">Back to Sign In</a>
        </p>

    </div>
</div>

</x-guest-layout>