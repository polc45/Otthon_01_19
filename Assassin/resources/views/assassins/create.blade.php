<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Assassin</title>
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
	<h1>Create Assassin</h1>

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

	<form method="POST" action="{{ route('assassins.store') }}">
		@csrf

		<label for="codename">Codename</label>
		<input id="codename" name="codename" type="text" value="{{ old('codename') }}" required maxlength="255">

		<label for="description">Description</label>
		<textarea id="description" name="description" rows="4" required>{{ old('description') }}</textarea>

		<label for="age">Age</label>
		<input id="age" name="age" type="text" value="{{ old('age') }}" required>

		<label for="skill">Skill</label>
		<select id="skill" name="skill" required>
			<option value="">-- choose --</option>
			<option value="low" {{ old('skill')=='low' ? 'selected' : '' }}>Low</option>
			<option value="medium" {{ old('skill')=='medium' ? 'selected' : '' }}>Medium</option>
			<option value="high" {{ old('skill')=='high' ? 'selected' : '' }}>High</option>
		</select>

		<label for="weapon_id">Weapon</label>
		<select id="weapon_id" name="weapon_id">
			<option value="">-- none --</option>
			@foreach($weapons as $weapon)
				<option value="{{ $weapon->id }}" {{ old('weapon_id') == $weapon->id ? 'selected' : '' }}>{{ $weapon->name }}</option>
			@endforeach
		</select>

		<div class="actions">
			<button type="submit">Create</button>
			<a href="{{ route('assassins.index') }}">Cancel</a>
		</div>
	</form>

</body>
</html>
