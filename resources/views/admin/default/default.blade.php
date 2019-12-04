<!DOCTYPE html>
<html>
<head>
	@include('admin.includes.head')
</head>
<body>
    <header class="header-area">
@include('admin.includes.header')
      
    </header>

@yield('content')

<footer class="footer-area">
@include('admin.includes.footer')
       
    </footer>

@include('admin.includes.scripts')
</body>
</html>