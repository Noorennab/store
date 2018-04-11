<html>
<head>

    <title>

    </title>
</head>


<body>

@foreach ($tasks as $task)
    <li>
        <a href="/blog/public/tasks/{{$task->id}}" >

        {{ $task->body }}
        </a>
    </li>
@endforeach



</body>










</html>