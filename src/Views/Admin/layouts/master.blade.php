<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @include('layouts.partials.head')
</head>


<body class="crm_body_bg">


    @include('layouts.partials.nav')

    <section class="main_content dashboard_part large_header_bg">

        @include('layouts.partials.topbar')

        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">

                @yield('content')

            </div>
        </div>

        @include('layouts.partials.footer')
    </section>

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    @include('layouts.partials.script')

    @yield('script')
</body>

</html>
