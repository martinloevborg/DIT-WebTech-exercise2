<!DOCTYPE html>
<html>

<head>
    <title>Courses index</title>
</head>

<body>
    <h1>Courses</h1>
    @if(session()->has('successC'))
        <p>{{session()->get('successC')}}</p>
    @endif
    <div class='course'>
        <ul>
            @foreach ($courses as $course)
            <li class="code">{{ $course->code}}</li>
            <li class="name">{{ $course->name}}</li>
            <li class="ects">{{ $course->ects}}</li>
            <li><a class="department" href="{{route('departments.show', [$course->department->id])}}">{{$course->department->name}}</a></li>
            <li><a class="show" href="{{route('courses.show', [$course->id])}}">Show</a></li>
            @endforeach
        </ul>
        <a class="new" href="{{route('courses.create')}}">Add new</a>
    </div>
</body>
</html>