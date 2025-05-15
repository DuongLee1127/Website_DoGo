<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
      @include('admin.layouts.head')
</head>

<body class="animsition">
    @include('admin.layouts.sidebar')
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('admin.layouts.header')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @include($template)
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
    </div>
</body>

@include('admin.layouts.script-file')

</html>
