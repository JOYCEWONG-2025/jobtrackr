<!DOCTYPE html>
<html>
<head>
    <title>Add Job — JobTrackr</title>
</head>
<body>
    <h1>Add New Job</h1>
    <a href="{{ route('jobs.index') }}">← Back</a>

    <form method="POST" action="{{ route('jobs.store') }}">
        @csrf

        <div>
            <label>Company</label><br>
            <input type="text" name="company" required>
        </div>

        <div>
            <label>Role</label><br>
            <input type="text" name="role" required>
        </div>

        <div>
            <label>Location</label><br>
            <input type="text" name="location">
        </div>

        <div>
            <label>Status</label><br>
            <select name="status">
                <option value="applied">Applied</option>
                <option value="interview">Interview</option>
                <option value="offer">Offer</option>
                <option value="rejected">Rejected</option>
            </select>
        </div>

        <div>
            <label>Job URL</label><br>
            <input type="url" name="job_url">
        </div>

        <div>
            <label>Date Applied</label><br>
            <input type="date" name="applied_at" required>
        </div>

        <div>
            <label>Notes</label><br>
            <textarea name="notes" rows="3"></textarea>
        </div>

        <br>
        <button type="submit">Save Application</button>
    </form>
</body>
</html>