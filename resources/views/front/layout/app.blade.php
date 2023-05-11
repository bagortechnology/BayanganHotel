<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>Home | Bayangan Hotel</title>        
		
        <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.ico') }}">

        <!-- All CSS -->
        @include('front.layout.styles')
        
        <!-- All Javascripts -->
        @include('front.layout.scripts')

        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500&display=swap" rel="stylesheet">
        
        <!-- Google Analytics -->
        @include('front.layout.ga4')

    </head>
    <body>
        
        @include('front.layout.top_bar')


        @include('front.layout.nav')


        @yield('main_content')


        @include('front.layout.footer')
		
        @include('front.layout.scripts_footer')       
		
   </body>
</html>