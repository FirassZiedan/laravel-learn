<html>
  <body>
    <h1>welcome To Tasks page</h1>

    <ul>
      @foreach ($tasks as $task)
        <li>
          <a href="/tasks/{{ $task->id }}">
            {{ $task->task }}
          </a>
        </li>
      @endforeach
    </ul>
  </body>
</html>
