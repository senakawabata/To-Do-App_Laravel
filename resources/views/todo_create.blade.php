<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスク追加 - TODOアプリ</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="mb-0">新しいタスクを追加</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="/create">
                    @csrf
                    <div class="mb-3">
                        <label for="task_name" class="form-label">タスク名</label>
                        <input type="text" class="form-control" id="task_name" name="task_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="task_description" class="form-label">タスクの詳細</label>
                        <textarea class="form-control" id="task_description" name="task_description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="assign_person_name" class="form-label">担当者</label>
                        <input type="text" class="form-control" id="assign_person_name" name="assign_person_name">
                    </div>
                    <div class="mb-3">
                        <label for="estimate_hour" class="form-label">予想所要時間（時間）</label>
                        <input type="number" class="form-control" id="estimate_hour" name="estimate_hour" min="0" step="0.5">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">タスクを追加</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-end">
                <a href="/" class="btn btn-secondary">← タスク一覧に戻る</a>
            </div>
        </div>
    </div>
</body>
</html>
