<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
        min-height: 100vh;
    }
    .custom-form {
        max-width: 500px;
        margin: 60px auto;
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 8px 32px rgba(60,72,88,0.15);
        padding: 36px 32px 28px 32px;
    }
    .custom-form h3 {
        font-weight: 700;
        color: #3b3f5c;
        letter-spacing: 1px;
    }
    .form-label {
        font-weight: 500;
        color: #4b5563;
    }
    .btn-primary {
        background: linear-gradient(90deg, #6366f1 0%, #2563eb 100%);
        border: none;
        font-weight: 600;
        letter-spacing: 1px;
        transition: background 0.2s;
    }
    .btn-primary:hover {
        background: linear-gradient(90deg, #2563eb 0%, #6366f1 100%);
    }
</style>
<form method="POST" action="{{ route('issues.store') }}" class="custom-form">
    @csrf
    <h3 class="mb-4 text-center">Create Issue</h3>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control shadow-sm" id="name" name="name" placeholder="Enter your name" aria-describedby="nameHelp">
    </div>
    <div class="mb-3">
        <label for="priority" class="form-label">Priority</label>
        <select name="priority" id="priority" class="form-select shadow-sm">
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control shadow-sm" id="message" name="message" placeholder="Describe the issue" aria-describedby="messageHelp" rows="3"></textarea>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-block py-2">Submit</button>
    </div>
</form>
