<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <title>Task App</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-5">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="/">Task App</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="/create-task">create-tasks</a>
            </li>

          </ul>
        </div>
      </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
