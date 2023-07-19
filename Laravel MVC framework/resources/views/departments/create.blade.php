<!DOCTYPE html>
<html>

    <head>
        <title>Departments create</title>
    </head>

    <body>
        <h1>New Department</h1>

        <form action="{{ route('departments.store') }}" method="POST" class="department">
            @csrf
            <div class="code">
                <label>Code:</label>
                <input type='text' name="code">
            </div>    
            <div class="name">
                <label>Name:</label>
                <input type='text' name='name'>
            </div>   
            <div class="description">
                <label>Description:</label>
                <input type='text' name='description'>
            </div>   
            <input type='submit' value='Submit' class='submit'> 
        </form>
    </body>
</html>

