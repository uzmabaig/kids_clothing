<!doctype html>
<html lang="en">
<head>
    <title>Products- @yield('title','website')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <div class="container col-6 mt-4">
        @include('flash-message')
    </div>
    
    <div class="container">
        @yield('content', 'Default content')
    </div>
    
</body>
</html>