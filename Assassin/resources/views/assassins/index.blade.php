<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assassins</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.css">
    <style>
        body { font-family: Arial, Helvetica, sans-serif; padding: 24px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #f4f4f4; }
        tr:nth-child(even) { background: #fafafa; }
        .muted { color: #666; font-size: 0.9rem; }
    </style>
</head>
<body>
    <button onclick="location.href='{{ route('weapons.index') }}'">View Weapons</button>
    <button onclick="location.href='{{ route('assassins.create') }}'">Create New Assassin</button>

    <h1>Assassins</h1>

    @if($assassins->isEmpty())
        <p class="muted">No assassins found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Codename</th>
                    <th>Description</th>
                    <th>Age</th>
                    <th>Skill</th>
                    <th>Weapon</th>
                </tr>
            </thead>
            <tbody>
                @foreach($assassins as $assassin)
                    <tr>
                        <td>{{ $assassin->id }}</td>
                        <td>{{ $assassin->codename }}</td>
                        <td>{{ $assassin->description }}</td>
                        <td>{{ $assassin->age }}</td>
                        <td>{{ $assassin->skill }}</td>
                        <td>{{ $assassin->weapon->name ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>
