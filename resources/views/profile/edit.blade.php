<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-lg flex items-center justify-center" style="background:linear-gradient(135deg,#818CF8,#7C3AED);">
                <span class="text-white text-sm font-bold">JT</span>
            </div>
            <h2 class="text-xl text-gray-800 leading-tight" style="font-family:'Playfair Display',serif;">
                Your Profile
            </h2>
        </div>
    </x-slot>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        .jt-panel { background: #FFFFFF; border: 1px solid #EDE9FE; }
        .jt-section-title { font-family: 'Playfair Display', serif; }
        .jt-field { color: #334155; }
        .jt-field::placeholder { color: #94a3b8; opacity: 1; }
        .jt-accent-bar { background: linear-gradient(180deg, #818CF8, #7C3AED); }
    </style>

    <div class="py-12" style="background:#F8F7FC;">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Profile Information -->
            <div class="jt-panel relative rounded-2xl shadow-sm overflow-hidden">
                <div class="jt-accent-bar absolute left-0 top-0 h-full w-1.5"></div>
                <div class="p-6 sm:p-8 pl-8 sm:pl-10">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Update Password -->
            <div class="jt-panel relative rounded-2xl shadow-sm overflow-hidden">
                <div class="jt-accent-bar absolute left-0 top-0 h-full w-1.5"></div>
                <div class="p-6 sm:p-8 pl-8 sm:pl-10">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Danger Zone -->
            <div class="relative rounded-2xl shadow-sm overflow-hidden border border-red-100" style="background:#FFF9F9;">
                <div class="absolute left-0 top-0 h-full w-1.5 bg-red-400"></div>
                <div class="p-6 sm:p-8 pl-8 sm:pl-10">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>