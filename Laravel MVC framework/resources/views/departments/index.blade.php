<!DOCTYPE html>
<html>
<head>
    <title>Departments index</title>
</head>
<body>
    <h1>Departments</h1>
    @if(session()->has('success'))
        <p>{{session()->get('success')}}</p>
    @endif
    <div class="department">
        <ul>
            @foreach ($departments as $department)
            <li class="code">{{$department->code}}</li>
            <li class="name">{{$department->name}}</li>
            <li class="courses">{{$department->courses()->get()->count()}}</li>
            <li><a class="show" href="{{route('departments.show', [$department->id])}}">Show</a></li>
            @endforeach
        </ul>  
        <a class="new" href="{{route('departments.create')}}">Add new</a> 
    </div>
</body>
</html>