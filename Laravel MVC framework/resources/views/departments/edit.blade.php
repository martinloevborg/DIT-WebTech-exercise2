<!DOCTYPE html>
<html>

    <head>
        <title>Departments edit</title>
    </head>

    <body>
        <h1>Edit Department</h1>

        <form action="{{route('departments.update', [$departments->id])}}" method="POST">
            @method('PUT')
            @csrf
            <label for="code">Code:</label>
            <input type="text" name="code" value="{{$departments->code}}">
            <br>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{$departments->name}}">
            <br>
            <label for="description">Description:</label>
            <input type='text' name="description" value="{{$departments->description}}">
            <br>
            <input type='submit' value='Submit' class="submit"> 
        </form>
    </body>
</html>