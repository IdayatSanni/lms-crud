<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students</title>
</head>
<body>
    <h1>All Students</h1>
    
    @if ($students->isEmpty())  <!-- Check if students collection is empty -->
        <p>No students found.</p>
    @else
        @foreach ($students as $student)
            <p>{{ $student->fname }} {{ $student->lname }}</p> <!-- Assuming you want to show both first and last names -->
        @endforeach
    @endif

</body>
</html>
