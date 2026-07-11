<div class="text-center mb-8">
    <h2 class="text-3xl font-bold text-white">
        Create Account
    </h2>

    <p class="text-gray-300 mt-2">
        Start managing your job applications today
    </p>
</div>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label class="text-gray-200 text-sm">Full Name</label>
        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
            required
            class="w-full mt-2 rounded-xl bg-white/10 border border-white/20 text-white">
    </div>

    <div class="mt-4">
        <label class="text-gray-200 text-sm">Email</label>
        <input
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
            class="w-full mt-2 rounded-xl bg-white/10 border border-white/20 text-white">
    </div>

    <div class="mt-4">
        <label class="text-gray-200 text-sm">Password</label>
        <input
            type="password"
            name="password"
            required
            class="w-full mt-2 rounded-xl bg-white/10 border border-white/20 text-white">
    </div>

    <div class="mt-4">
        <label class="text-gray-200 text-sm">
            Confirm Password
        </label>

        <input
            type="password"
            name="password_confirmation"
            required
            class="w-full mt-2 rounded-xl bg-white/10 border border-white/20 text-white">
    </div>

    <button
        class="w-full mt-8 bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-xl font-semibold transition">
        Create Account
    </button>

    <p class="text-center text-gray-300 mt-6">
        Already have an account?
        <a href="{{ route('login') }}"
            class="text-indigo-300 hover:text-white font-semibold">
            Sign In
        </a>
    </p>
</form>