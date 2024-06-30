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
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update',$category->id) }}" method="POST">
        @csrf
        @method('put')

        <div class="form-group">
            <h3>cat name</h3>
            <input type="text" value="{{ $category->name }}" name="name" placeholder="Enter cat name" class="form-control">
            @error('name')
                <h3>{{ $message }}</h3>
            @enderror
        </div>
        <div class="form-group">
            <h3>cat slug</h3>
            <input type="text" value="{{ $category->slug }}" name="slug" placeholder="Enter cat slug" class="form-control">
            @error('slug')
                <h4>{{ $message }}</h4>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>

    </form>

    



</body>
</html>