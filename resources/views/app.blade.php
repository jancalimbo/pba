<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    @vite('resources/css/app.css')
    @inertiaHead
  </head>
  <body style="background-color:rgb(151, 212, 238)">
    @inertia
    @vite('resources/js/app.js')
  </body>
</html>


<style scoped>

::-webkit-scrollbar {
  display: none;
}
</style>
