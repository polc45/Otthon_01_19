<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Weapon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.css">
    <style>
        body { font-family: Arial, Helvetica, sans-serif; padding: 24px; }
        form { max-width: 720px; }
        label { display:block; margin-top:12px; font-weight:600; }
        input[type="text"], textarea, select { width:100%; padding:8px; margin-top:6px; box-sizing:border-box; }
        .error { color: #b00020; font-size: 0.95rem; }
        .actions { margin-top:16px; }
    </style>
</head>
<body>
    <h1>Create Weapon</h1>

    @if ($errors->any())
        <div class="error">
            <p><strong>Please fix the following errors:</strong></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('weapons.store') }}">
        @csrf

        <label for="name">Name</label>
        <input id="name" name="name" type="text" value="{{ old('name') }}" required maxlength="255">

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="4">{{ old('description') }}</textarea>

        <label for="lethality">Lethality</label>
        <select id="lethality" name="lethality" required>
            <option value="">-- choose --</option>
            <option value="low" {{ old('lethality')=='low' ? 'selected' : '' }}>Low</option>
            <option value="medium" {{ old('lethality')=='medium' ? 'selected' : '' }}>Medium</option>
            <option value="high" {{ old('lethality')=='high' ? 'selected' : '' }}>High</option>
        </select>

        <label for="weight">Weight</label>
        <input id="weight" name="weight" type="text" value="{{ old('weight') }}" required>

        <div class="actions">
            <button type="submit">Create</button>
            <a href="{{ route('weapons.index') }}">Cancel</a>
        </div>
    </form>

</body>
</html>
