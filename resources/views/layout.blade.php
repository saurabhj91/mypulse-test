@include('components.header',['title'=>$title])

<body class="antialiased dark:bg-black dark:text-white/50">
    <div class="container-fluid">
        @yield('content')
    </div>
</body>


@include('components.footer')