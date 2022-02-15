<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
       
    @forelse($user as $item)
        
        <div>
            <h2>{{$item->name}}</h2>
            <h3>{{$item->role($item->id)}}</h3>
            <div>{{$item->id}}</div>
            <p> 
                <a href="{{route('admin::user::index', ['user' => $item->id])}}">
                    Изменить
                </a>
                <a href="{{route('admin::user::index', ['id' => $item->id])}}">
                    Удалить
                </a>
            </p>
        </div>

    @empty
        <p>Empty</p>
    @endforelse

   
</body>
</html>