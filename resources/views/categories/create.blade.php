<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Create Category</h1>
    <a href="{{ route('categories.index') }}">Back To All Categories</a>
    <form action="{{ route('categories.store') }}" method="POST"> 
        @csrf
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Category name here">
            @error('name')
                <h4>{{ $message }}</h4>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" name="slug" class="form-control" placeholder="Slug here">
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>

    </form>
</body>
</html>