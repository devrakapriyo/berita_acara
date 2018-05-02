<!DOCTYPE html>
<html>

<head>
    <title>IPC | Dashboard {{Auth::user()->name}}</title>
    <script src="{{URL::asset('jquery.js')}}"></script>
    <script src="{{URL::asset('attribute.js')}}"></script>
    <script src="{{URL::asset('js/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
    <script src="{{URL::asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
</head>

<!--Import Google Icon Font-->
<link href="{{URL::asset('font.css')}}" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="{{URL::asset('design/css/materialize.min.css')}}" media="screen,projection" />
<!--Let browser know website is optimized for mobile-->
<link rel="stylesheet" href="{{URL::asset('style.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<body>
    @if(Auth::check() == true)
    @include('header')
    <div class="row">
        <div class="col s12 m4 l3">
            @include('menu')
        </div>
        <div class="col s12 m8 l9">
            @yield('content')
            <!-- dilarang menghapus watermak ini tanpa seizin dari pihak pembuat -->
            <!-- HAK CIPTA DIATUR UNDANG-UNDANG -->
            <p><b>Copyright <span class="blue-text">2015</span> | &copy <span class="green-text">PKL SMK WIKRAMA BOGOR</span></b></p>
        </div>
    </div>
    @else 
        @include('failed')
    @endif
</body>

</html>