<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add a New medicine</h1>
    <form method="post" action="{{route('addmedicstore')}}">
        @csrf
        @method('post')
        <div>
            <label for="name">name</label>
            <input type="name" name="name">
            @error('name')
            <span style="color:red">{{$message}}</span>
            @enderror
        </div><br>
        <div>
            <label for="price">price</label>
            <input type="text" name="price">
            @error('price')
            <span style="color:red">{{$message}}</span>
            @enderror
        </div><br>

        <input type="submit" value="Add New medicine">
        <input type="reset">
        @if(session('status'))
        <span style="color:red">{{session('status')}}</span>
        @endif
    </form>
</body>
</html>