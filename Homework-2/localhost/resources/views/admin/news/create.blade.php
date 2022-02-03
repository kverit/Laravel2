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
        {!! Form::open([ 'route' => 'admin::news::create']) !!}
            <div>
                {!! Form::text('title', $model->title) !!}
            </div>

            <div>
                {!! Form::textarea('content', $model->content) !!}
            </div>

            <div>
                <label>Category</label>
                {!! Form::select('category_id', $categories, $model->category_id) !!}
            </div>
            
            <div>
                {!! Form::submit('Create') !!}
            </div>
        {!! Form::close() !!}
    </div>
</body>
</html>