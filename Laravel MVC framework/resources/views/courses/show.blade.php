<!DOCTYPE html>
<html>

    <head>
        <title>Courses show</title>
    </head>

    <body>
        <h1>Courses</h1>
        @if(session()->has('messageC'))
            <p>{{session()->get('messageC')}}</p>
        @endif
            <div class="course">
                <ul>
                    
                    <li class="code">{{$courses->code}}</li>
                    <li class="name">{{$courses->name}}</li>
                    <li class="ects">{{$courses->ects}}</li>
                    <li><a class="show" href="{{route('departments.show', [$courses->department->id])}}">{{$courses->department->name}}</a></li>
                    <li class="description">{{$courses->description}}</li>
                    
                </ul>
            <a class="edit" href="{{route('courses.edit', [$courses->id])}}">Edit</a>
            <div>
                <form action="{{route('courses.destroy', [$courses->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="remove" type="submit" value="Delete"/>
                </form>
            </div>
        </div>
    </body>
</html>