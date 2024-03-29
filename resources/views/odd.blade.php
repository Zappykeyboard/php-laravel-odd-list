<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
 
    </head>
    <body>
      @include('elem.header')
      
      <div class="container">
        @foreach ($oddNumbers as $num)
          <div>{{$num}}</div>
        @endforeach
      </div>

      @include('elem.footer')
    </body>
</html>
