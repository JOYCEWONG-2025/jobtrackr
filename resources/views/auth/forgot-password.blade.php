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

    <!-- Full-page dot-grid overlay -->
    <div class="absolute inset-0 pointer-events-none opacity-[0.05]"
         style="background-image:radial-gradient(#000 1px,transparent 1px);background-size:3px 3px;"></div>

    <!-- ===== Small skyline, just as an accent along the base ===== -->
    <svg class="absolute bottom-0 left-0 w-full h-[30%] pointer-events-none opacity-45" viewBox="0 0 1200 300" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <g fill="#A5B4FC" opacity="0.5">
            <rect x="0" y="140" width="60" height="160"/>
            <rect x="1140" y="120" width="60" height="180"/>
        </g>
        <g fill="#818CF8" opacity="0.55">
            <rect x="80" y="170" width="50" height="130"/>
            <rect x="1030" y="160" width="70" height="140"/>
        </g>
        <g fill="#6D28D9" opacity="0.6">
            <polygon points="600,300 620,160 630,160 650,300"/>
            <rect x="618" y="145" width="14" height="16"/>
            <rect x="900" y="200" width="60" height="100"/>
            <rect x="240" y="190" width="55" height="110"/>
        </g>
    </svg>

    <div class="w-full max-w-md relative z-10">

        <!-- ===== Lost & Found Desk concept ===== -->
        <div class="text-center mb-8">
            <p class="uppercase tracking-[0.4em] text-[11px] text-slate-600 border-b border-slate-700/70 pb-2 inline-block">
                Vol. I &nbsp;•&nbsp; Recovery Desk &nbsp;•&nbsp; Personal Edition
            </p>
            <p class="uppercase tracking-[0.35em] text-xs font-bold text-slate-500 mt-3">Lost &amp; Found</p>

            <h2 class="text-4xl text-slate-800 mt-4 drop-shadow-[0_2px_10px_rgba(255,253,248,0.3)]" style="font-family:'Playfair Display',serif;">
                Misplaced Your Key?
            </h2>
            <p class="text-slate-600 font-medium mt-3 text-sm max-w-sm mx-auto">
                Leave your email at the desk — we'll send a new one straight to your inbox.
            </p>
        </div>

        <div class="jt-card rounded-2xl p-10 shadow-2xl border-2 border-slate-900 relative">

            <!-- little envelope tab accent -->
            <div class="absolute -top-3 left-8 w-16 h-5 bg-[#C7D2FE]/70 rotate-[-3deg] rounded-sm shadow-sm"></div>

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