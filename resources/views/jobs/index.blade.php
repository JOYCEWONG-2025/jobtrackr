<!DOCTYPE html>
<html>

<head>
    <title>JobTrackr</title>
</head>

<body>
    <h1>My Job Applications</h1>
    <a href="{{ route('jobs.create') }}">+ Add New Job</a>

    @forelse($jobs as $job)
        <div>
            <h3>{{ $job->company }} — {{ $job->role }}</h3>
            <p>Status: {{ $job->status }}</p>
            <p>Applied: {{ $job->applied_at }}</p>
            <a href="{{ route('jobs.edit', $job) }}">Edit</a>

            <form method="POST" action="{{ route('jobs.destroy', $job) }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete this application?')">Delete</button>
            </form>
        </div>
    @empty
        <p>No applications yet. Add your first one!</p>
    @endforelse
</body>

</html>