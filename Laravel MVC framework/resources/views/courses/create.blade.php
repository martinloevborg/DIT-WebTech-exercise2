<!DOCTYPE html>
<html>

    <head>
        <title>Courses create</title>
    </head>

    <body>
        <h1>New Course</h1>
        <form action="{{ route('courses.store') }}" method="POST" class="course">
            @csrf
            <div class="code">
                <label>Code:</label>
                <input type='text' name='code'>
            </div>    
            <div class="name">
                <label>Name:</label>
                <input type='text' name='name'>
            </div>   
            <div class="ects">
                <label>Ects:</label>
                <input type='text' name='ects'>
            </div>   
            <div class="department">
                <label>Department:</label>
                <select name='department'>
                    @foreach(App\Models\Department::all() as $department)
                    <option value="{{$department->id}}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>   
            <div class="description">
                <label>Description:</label>
                <input type='text' name='description'>
            </div>   
            <input type='submit' value='Submit' class='submit'> 
        </form>
    </body>
</html>