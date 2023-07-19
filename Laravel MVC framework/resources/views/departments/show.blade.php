<!DOCTYPE html>
<html>

<head>
    <title>Departments show</title>
</head>

<body>
    <h1>Departments</h1>
    @if(session()->has('message'))
        <p>{{session()->get('message')}}</p>
    @endif
    <div class="department">
        <p>{{$departments->code}}</p>
        <p>{{$departments->name}}</p>
        <p>{{$departments->description}}</p>
       
            <ul class="course">
                @foreach ($departments->courses as $course)
                <li class="code">{{$course->code}}</li>
                <li class="name">{{$course->name}}</li>
                <li class="ects">{{$course->ects}}</li>
                <li><a class="show" href="{{route('courses.show', [$course->id])}}">Show</a></li>
                @endforeach
            </ul>
        
        <a class="edit" href="{{route('departments.edit', [$departments->id])}}">Edit</a>
        <div>
            <form action="{{route('departments.destroy', [$departments->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <input class="remove" type="submit" value="Delete"/>
            </form>
        </div>
    </div>
</body>

</html>