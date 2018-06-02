<html>
  <body>
    <h1>welcome To Homepage</h1>

    <ul>
      @foreach ($tasks as $task)
        <li> {{ $task }} </li>
      @endforeach
    </ul>
  </body>
</html>
