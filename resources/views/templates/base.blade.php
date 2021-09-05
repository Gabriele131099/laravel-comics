  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
       <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <title>Dc Comics - @yield('title')</title> <!--- il titolo sara dinamico -->
</head>
<body>
    <header>
        @include('templates.header')
    </header>

    <main class="main">
            
        @yield('main')
    </main>
    

    
    <footer>
        @include('templates.footer')
    </footer>

    <section>
        @include('templates.media')
    </section>
</body>
</html>


