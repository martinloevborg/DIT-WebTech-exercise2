<!DOCTYPE html>
<html>
    <head>
        <title>Home page</title>
    </head>
    <body>
        <h1>Welcome to Kavu</h1>
        <a class="departments-link" href=" {{ route('departments.index') }}">Departments</a> 
        <a class="courses-link" href=" {{ route('courses.index') }}">Courses</a> 
    </body>