<!DOCTYPE html>
<html>

<head>
    <title>JobTrackr</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-600">JobTrackr</h1>
        <div class="flex items-center gap-4">
            <a href="{{ route('jobs.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700">+ Add Job</a>
            <a href="{{ route('profile.edit') }}"
                class="text-sm text-gray-500 hover:text-gray-700">{{ auth()->user()->name }}</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm text-red-400 hover:text-red-600">Log out</button>
            </form>
        </div>
    </nav>

    <div class="max-w-4xl mx-auto mt-8 px-4">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">My Applications</h2>

        @forelse($jobs as $job)
            <div class="bg-white rounded-xl shadow p-5 mb-4 flex justify-between items-center">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">{{ $job->company }}</h3>
                    <p class="text-gray-500 text-sm">{{ $job->role }}</p>
                    <p class="text-gray-400 text-xs mt-1">Applied: {{ $job->applied_at }}</p>
                </div>
                <div class="flex items-center gap-4">
                    <span class="px-3 py-1 rounded-full text-xs font-medium
                            @if($job->status === 'applied') bg-blue-100 text-blue-700
                            @elseif($job->status === 'interview') bg-yellow-100 text-yellow-700
                            @elseif($job->status === 'offer') bg-green-100 text-green-700
                            @else bg-red-100 text-red-700
                            @endif">
                        {{ ucfirst($job->status) }}
                    </span>
                    <a href="{{ route('jobs.edit', $job) }}" class="text-sm text-blue-500 hover:underline">Edit</a>
                    <form method="POST" action="{{ route('jobs.destroy', $job) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this?')"
                            class="text-sm text-red-400 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="bg-white rounded-xl shadow p-10 text-center text-gray-400">
                No applications yet. <a href="{{ route('jobs.create') }}" class="text-blue-500 hover:underline">Add your
                    first one!</a>
            </div>
        @endforelse
    </div>
</body>

</html>