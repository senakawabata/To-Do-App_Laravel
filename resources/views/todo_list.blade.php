<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">ToDo List</h1>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h2 class="mb-0">タスクの一覧</h2>
                <a href="/create-page" class="btn btn-primary">タスクを追加</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>タスクの名前</th>
                                <th>タスクの説明</th>
                                <th>担当者の名前</th>
                                <th>見積時間(h)</th>
                                <th colspan="2">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($todos as $todo)
                            <tr>
                                <td>{{$todo->task_name}}</td>
                                <td>{{$todo->task_description}}</td>
                                <td>{{$todo->assign_person_name}}</td>
                                <td>{{$todo->estimate_hour}}</td>
                                <td>
                                    <a href="/edit-page/{{$todo->id}}" class="btn btn-sm btn-outline-primary">編集</a>
                                </td>
                                <td>
                                    <a href="/delete-page/{{$todo->id}}" class="btn btn-sm btn-outline-danger">削除</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
