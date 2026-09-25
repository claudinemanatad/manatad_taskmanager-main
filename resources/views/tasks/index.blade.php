<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission Control | Task Manager</title>
    @php($viteManifest = json_decode(file_get_contents(public_path('build/manifest.json')), true))
    <link rel="stylesheet" href="{{ '/build/' . $viteManifest['resources/css/app.css']['file'] }}">
    <script type="module" src="{{ '/build/' . $viteManifest['resources/js/app.js']['file'] }}"></script>
</head>
<body>
    <div class="scanlines"></div>
    <main class="shell">
        <header class="topbar">
            <a class="brand" href="/tasks">
                <span class="brand-mark">+</span>
                <span>MISSION<span class="accent">CTRL</span></span>
            </a>
            <div class="topbar-status"><span class="status-dot"></span> SYSTEM ONLINE <span class="topbar-divider"></span> {{ now()->format('D, M d Y') }}</div>
        </header>

        <section class="hero">
            <div>
                <p class="eyebrow">// PERSONAL OPERATIONS DECK</p>
                <h1>Make your next move<span class="accent">.</span></h1>
                <p class="hero-copy">Track the objectives that move your day forward.</p>
            </div>
            <div class="level-badge"><span>LVL</span><strong>{{ str_pad((string) max(1, intdiv($stats['completed'], 5) + 1), 2, '0', STR_PAD_LEFT) }}</strong></div>
        </section>

        @if (session('success'))
            <div class="flash">+ {{ session('success') }}</div>
        @endif

        <section class="stats-grid" aria-label="Task statistics">
            <div class="stat-card stat-cyan"><span class="stat-label">TOTAL MISSIONS</span><strong>{{ str_pad((string) $stats['total'], 2, '0', STR_PAD_LEFT) }}</strong><span class="stat-icon">/\/</span></div>
            <div class="stat-card stat-lime"><span class="stat-label">IN PROGRESS</span><strong>{{ str_pad((string) $stats['pending'], 2, '0', STR_PAD_LEFT) }}</strong><span class="stat-icon">...</span></div>
            <div class="stat-card stat-pink"><span class="stat-label">COMPLETED</span><strong>{{ str_pad((string) $stats['completed'], 2, '0', STR_PAD_LEFT) }}</strong><span class="stat-icon">OK</span></div>
        </section>

        <section class="workspace">
            <div class="panel add-panel">
                <div class="panel-heading"><span class="panel-number">01</span><div><p class="eyebrow">NEW OBJECTIVE</p><h2>Add a mission</h2></div></div>
                <form method="POST" action="/tasks" class="task-form">
                    @csrf
                    <label for="title">Mission title <span>*</span></label>
                    <input id="title" name="title" type="text" value="{{ old('title') }}" placeholder="What needs to get done?" required maxlength="120">
                    @error('title')<small class="error">{{ $message }}</small>@enderror
                    <label for="description">Briefing <em>optional</em></label>
                    <textarea id="description" name="description" rows="4" placeholder="Add some context...">{{ old('description') }}</textarea>
                    <div class="form-row">
                        <div><label for="due_date">Target date <em>optional</em></label><input id="due_date" name="due_date" type="date" value="{{ old('due_date') }}"></div>
                        <div><label for="status">Status</label><select id="status" name="status"><option value="pending">Pending</option><option value="completed">Completed</option></select></div>
                    </div>
                    <button class="button button-primary" type="submit"><span>+</span> Deploy mission</button>
                </form>
            </div>

            <div class="panel board-panel">
                <div class="board-heading"><div class="panel-heading"><span class="panel-number">02</span><div><p class="eyebrow">ACTIVE QUEUE</p><h2>Mission board</h2></div></div><span class="queue-count">{{ $stats['pending'] }} OPEN</span></div>
                <div class="task-list">
                    @forelse ($tasks as $task)
                        <article class="task-row {{ $task->status === 'completed' ? 'is-complete' : '' }}">
                            <form method="POST" action="/tasks/{{ $task->id }}/status" class="status-form">
                                @csrf @method('PATCH')
                                <input type="hidden" name="status" value="{{ $task->status === 'completed' ? 'pending' : 'completed' }}">
                                <button class="check-button" type="submit" aria-label="Mark {{ $task->status === 'completed' ? 'pending' : 'completed' }}">{{ $task->status === 'completed' ? '✓' : '' }}</button>
                            </form>
                            <div class="task-content"><h3>{{ $task->title }}</h3>@if ($task->description)<p>{{ $task->description }}</p>@endif<div class="task-meta"><span class="pill {{ $task->status }}">{{ $task->status }}</span>@if ($task->due_date)<span class="due">TARGET {{ $task->due_date->format('M d, Y') }}</span>@endif</div></div>
                            <div class="task-actions"><a href="/tasks/{{ $task->id }}/edit" aria-label="Edit {{ $task->title }}">EDIT</a><form method="POST" action="/tasks/{{ $task->id }}" onsubmit="return confirm('Remove this mission?')">@csrf @method('DELETE')<button type="submit">DEL</button></form></div>
                        </article>
                    @empty
                        <div class="empty-state"><span class="empty-icon">[ ]</span><h3>Board is clear.</h3><p>Deploy your first mission using the panel on the left.</p></div>
                    @endforelse
                </div>
            </div>
        </section>
        <footer><span>MISSION CTRL v1.0</span><span>FOCUS. EXECUTE. REPEAT.</span></footer>
    </main>
</body>
</html>