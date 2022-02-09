<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::open(['route' => 'admin::category::save']) !!}
            <div>
                {!! Form::text('category_name', $model->category_name) ?? old('category_name') !!}
            </div>
            
            <div>
                {!! Form::submit('Create') !!}
            </div>
        {!! Form::close() !!}
    </div>
</body>
</html>