<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
    <link href="../css/app.css" rel="stylesheet" />
</head>

<body>
    <section class="container">
        <a href="{{ route('create-new-post') }}" class="btn btn-success mt-4">Создать toDo</a>
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success mt-4">
                    {{ session('status') }}
                </div>
            @endif
            @foreach ($posts as $post)
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>{{ $post->title }}</h4>
                    </div>
                    <div class="card-body">
                        <h6>{{ $post->text }}</h6>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('edit', $post->id) }}" class="btn btn-primary">Редактировать</a>
                        <form action="{{ route('delete', $post->id) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</body>

</html>
