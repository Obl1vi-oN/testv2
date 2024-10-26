<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .content {
            display: flex;
            gap: 20px;
        }
        .content div {
            display: flex;
            flex-direction: column;
            gap: 10px;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="content">
    @foreach($book as $books )
        <div>
            <p>Название: {{$books->name}}</p>
            <p>Описание: {{$books->description}}</p>
            <p>Дата создания: {{$books->created_at}}</p>
            <p>{{$books->options}}</p>
            <p>{{$books->view}}</p>
        </div>
    @endforeach
</div>

<div>
    <form action="/order" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <select name="options" id="options">
                <option value="Жалоба">Жалоба</option>
                <option value="Предложение">Предложение</option>
            </select>
        </div>
        <div>
            <select name="view" id="view">
                <option value="Полезно">Полезно</option>
                <option value="Бесполезно">Бесполезно</option>
            </select>
        </div>
        <button type="submit">Add</button>
    </form>
</div>


</body>
</html>
