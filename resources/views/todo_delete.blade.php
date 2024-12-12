<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスク削除 - TODOアプリ</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="mb-0">タスクの削除</h1>
            </div>
            <div class="card-body">
                <div class="alert alert-warning">
                    <h4 class="alert-heading">削除の確認</h4>
                    <p>以下のタスクを削除しようとしています。この操作は取り消せません。</p>
                </div>
                <div class="mb-4">
                    <h5>タスク詳細：</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>タスク名：</strong> {{$todo->task_name}}</li>
                        <li class="list-group-item"><strong>タスクの詳細：</strong> {{$todo->task_description}}</li>
                        <li class="list-group-item"><strong>担当者：</strong> {{$todo->assign_person_name}}</li>
                        <li class="list-group-item"><strong>予想所要時間：</strong> {{$todo->estimate_hour}}時間</li>
                    </ul>
                </div>
                <form method="POST" action="/delete/{{$todo->id}}">
                    @csrf
                    <p class="mb-3">このタスクを削除してもよろしいですか？</p>
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="delete" class="btn btn-danger">タスクを削除</button>
                        <a href="/" class="btn btn-secondary">キャンセル</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
