<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Edit Mission | Mission Control</title>
    @php($viteManifest = json_decode(file_get_contents(public_path('build/manifest.json')), true))
    <link rel="stylesheet" href="{{ '/build/' . $viteManifest['resources/css/app.css']['file'] }}">
    <script type="module" src="{{ '/build/' . $viteManifest['resources/js/app.js']['file'] }}"></script>
</head>
<body><div class="scanlines"></div><main class="shell narrow-shell"><header class="topbar"><a class="brand" href="/tasks"><span class="brand-mark">+</span><span>MISSION<span class="accent">CTRL</span></span></a><a class="back-link" href="/tasks">&larr; BACK TO BOARD</a></header>
    <section class="edit-wrap"><p class="eyebrow">// OBJECTIVE CONFIGURATION</p><h1>Edit mission<span class="accent">.</span></h1>
        <div class="panel edit-panel"><form method="POST" action="/tasks/{{ $task->id }}" class="task-form">@csrf @method('PUT')
            <label for="title">Mission title <span>*</span></label><input id="title" name="title" type="text" value="{{ old('title', $task->title) }}" required maxlength="120">
            @error('title')<small class="error">{{ $message }}</small>@enderror
            <label for="description">Briefing <em>optional</em></label><textarea id="description" name="description" rows="5">{{ old('description', $task->description) }}</textarea>
            <div class="form-row"><div><label for="due_date">Target date <em>optional</em></label><input id="due_date" name="due_date" type="date" value="{{ old('due_date', optional($task->due_date)->format('Y-m-d')) }}"></div><div><label for="status">Status</label><select id="status" name="status"><option value="pending" @selected(old('status', $task->status) === 'pending')>Pending</option><option value="completed" @selected(old('status', $task->status) === 'completed')>Completed</option></select></div></div>
            <div class="edit-actions"><a class="button button-quiet" href="/tasks">Cancel</a><button class="button button-primary" type="submit">Save changes <span>&rarr;</span></button></div>
        </form></div>
    </section>
</main></body></html>