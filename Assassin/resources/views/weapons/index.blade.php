<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weapons</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.css">
    <style>
        body { font-family: Arial, Helvetica, sans-serif; padding: 24px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #f4f4f4; }
        tr:nth-child(even) { background: #fafafa; }
        .muted { color: #666; font-size: 0.9rem; }
        .top-actions { margin-bottom: 12px; }
    </style>
</head>
<body>
    <button class="top-actions" onclick="location.href='{{ route('assassins.index') }}'">View Assassins</button>
    <button class="top-actions" onclick="location.href='{{ route('weapons.create') }}'">Create New Weapon</button>

    <h1>Weapons</h1>

    @if($weapons->isEmpty())
        <p class="muted">No weapons found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Lethality</th>
                    <th>Weight</th>
                </tr>
            </thead>
            <tbody>
                @foreach($weapons as $weapon)
                    <tr>
                        <td>{{ $weapon->id }}</td>
                        <td>{{ $weapon->name }}</td>
                        <td>{{ $weapon->description }}</td>
                        <td>{{ $weapon->lethality }}</td>
                        <td>{{ $weapon->weight }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>
