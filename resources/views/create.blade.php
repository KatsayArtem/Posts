<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section class="container">
        <a href="{{ route('/') }}" class="btn btn-danger mt-4">Назад</a>
        <div class="card mt-4">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        <li>Все поля должны быть заполнены</li>
                    </ul>
                </div>
            @endif
            <form action="{{ route('store-post') }}" method="post">
                @csrf
                <div class="card-header">
                    <label for="exampleFormControlTextarea1">Название</label>
                    <input type="text" name='title' class="form-control" id="exampleInputEmail1" />
                </div>
                <div class="card-body">
                    <label for="exampleFormControlTextarea1">Описание</label>
                    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Создать</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
