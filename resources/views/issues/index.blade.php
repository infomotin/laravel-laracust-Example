<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h2 class="mb-4">Issues List</h2>
    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Priority</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($issues as $issue)
                <tr>
                    <td>{{ $issue->name }}</td>
                    <td>
                        <span class="badge
                            @if($issue->priority === 'High') bg-danger
                            @elseif($issue->priority === 'Medium') bg-warning text-dark
                            @else bg-success
                            @endif">
                            {{ $issue->priority }}
                        </span>
                    </td>
                    <td>{{ $issue->message }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
