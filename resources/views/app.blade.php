<!DOCTYPE html>
<html>
  <head>
    <title>Goritmi</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
     
     
    <link rel="icon" href="{{ asset('images/fav.png') }}" type="image/png">

    @routes
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>