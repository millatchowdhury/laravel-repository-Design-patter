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
    <h1>All Category</h1>

    
    @if ($message = Session::get('message'))
        <h3>{{ $message }}</h3>
    @endif

    <a href="{{ route('categories.create') }}">Add Category</a>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Slug</td>
            <td>Action</td>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
                    <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    
                </td>
            </tr>
        @endforeach
    </table>



</body>
</html>