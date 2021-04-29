@include('admin.include.header')  

<body id="page-top">
    @include('admin.include.sidebar')
    @include('admin.include.navbar')
    @yield('body') 
    @include('admin.include.logoutmodel')
    @include('admin.include.scripts')
    @yield('extrascript')
</body>

</html>
