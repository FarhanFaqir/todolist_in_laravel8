<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    @include('layouts.navbar')
    <div style="margin-top: 80px;"></div>
    <div class="container">
        @include('layouts.messages')
        @yield('content')
    </div>

    <footer id='footer' class="text-center">
        <p>Copyright &copy; 2022 TodoList</p>
    </footer>
</body>
</html>