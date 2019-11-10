<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">

        <meta name="csrf-token"content="{{ csrf_token() }}">
        <title>Project Z</title>

        <!--Vuetify CSS-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app"></div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
