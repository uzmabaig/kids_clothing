<!doctype html>
<html lang="en">
<head>
    <title>@yield('title','website')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container col-6 mt-4">
        @include('flash-message')
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-4">
              <div class="card">
                <div class="card-header">
         @yield('content', 'Default content')
    </div>
</form>
</div>
</div>
</div>
</div>
    </div>
</body>
</html>