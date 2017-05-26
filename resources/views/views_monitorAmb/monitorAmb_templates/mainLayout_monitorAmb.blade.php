<html>
    <head>
        <title>Monitor Ambiental|@yield('title')</title>
        <link href="{{asset('bootstrap-3.3.7/css/bootstrap.css')}}" rel="stylesheet" media="screen"> 
        <link href="{{asset('css/mainLayout.css')}}" rel="stylesheet" media="screen">  
        <link href="{{asset('css/welcome_monitorAmb.css')}}" rel="stylesheet" media="screen">        
    </head>
    <body>
        <div id="mainContainer">
            <div id="mainHeader">
                @yield('mainHeader')
            </div>
            <div id="mainContent">
                @yield('mainContent')
            </div>
            <div id="mainFooter">
                @yield('mainFooter')
            </div>
        </div>
        <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery-3.2.1.js')}}"></script> 
        <!-- <script src="{{asset('bootstrap-3.3.7/js/vertical-slider.js')}}"></script> -->
        <script src="{{asset('js/vertical-slider.js')}}"></script>          
    </body>
</html>