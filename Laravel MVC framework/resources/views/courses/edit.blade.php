<!DOCTYPE html>
<html>

    <head>
        <title>Courses edit</title>
    </head>

    <body>
        <h1>Edit Course</h1>

        <form action="{{route('courses.update', [$courses->id])}}" method="POST"> 
            @method('PUT')
            @csrf
            <br>
            <label for="code">Code:</label>
            <input type='text' name="code" value="{{$courses->code}}">
            <br>
            <label for="name">Name:</label>
            <input type='text' name='name' value="{{$courses->name}}">
            <br>
            <label for="ects">Ects:</label>
            <input type='text' name='ects' value="{{$courses->ects}}">
            <br>
            <label for="department">Department:</label>
            <select name='department'>
                @foreach(App\Models\Department::all() as $department)
                <option value="{{$department->id}}">{{ $department->name }}</option>
                @endforeach
            </select>
            <br>
            <label for="description">Description:</label>
            <input type='text' name='description' value="{{$courses->description}}">
            <br>
            <input type='submit' value="Submit" class='submit'> 
        </form>
    </body>
</html>