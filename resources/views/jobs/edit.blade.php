<!DOCTYPE html>
<html>
<head>
    <title>Edit Job — JobTrackr</title>
</head>
<body>
    <h1>Edit Job</h1>
    <a href="{{ route('jobs.index') }}">← Back</a>

    <form method="POST" action="{{ route('jobs.update', $job) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Company</label><br>
            <input type="text" name="company" value="{{ $job->company }}" required>
        </div>

        <div>
            <label>Role</label><br>
            <input type="text" name="role" value="{{ $job->role }}" required>
        </div>

        <div>
            <label>Location</label><br>
            <input type="text" name="location" value="{{ $job->location }}">
        </div>

        <div>
            <label>Status</label><br>
            <select name="status">
                @foreach(['applied','interview','offer','rejected'] as $status)
                    <option value="{{ $status }}" {{ $job->status === $status ? 'selected' : '' }}>
                        {{ ucfirst($status) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Job URL</label><br>
            <input type="url" name="job_url" value="{{ $job->job_url }}">
        </div>

        <div>
            <label>Date Applied</label><br>
            <input type="date" name="applied_at" value="{{ $job->applied_at }}" required>
        </div>

        <div>
            <label>Notes</label><br>
            <textarea name="notes" rows="3">{{ $job->notes }}</textarea>
        </div>

        <br>
        <button type="submit">Update Application</button>
    </form>
</body>
</html>