<html>
<head>
    @include('partials.head')
<head>
 <body id="body-pd">

    @include('partials.header')  
    @include('partials.nav')
  

    @yield('content')
    
    <!--Container Main start-->

    <!--Container Main end-->
    @include('partials.footer-script') 
   
 </body>
 </html>