<!doctype html>
<html lang="vi">

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


            <!-- modal large -->
			<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Tiêu đề Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if (isset($config['modal']))
                            <iframe src="{{ asset($config['modal']) }}" frameborder="0"></iframe>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-cancel" data-dismiss="modal">Hủy</button>
                    </div>
                    </div>
                </div>
            </div>
			<!-- end modal large -->

            <!-- modal product -->
			<div class="modal fade productModal" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Tiêu đề Modal</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if (isset($config['modal2']) )

                        <iframe src="{{ asset($config['modal2']) }}" frameborder="0"></iframe>
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-cancel" data-dismiss="modal">Hủy</button>
                    </div>
                    </div>
                </div>
            </div>

			<!-- end modal large -->
        </div>
    </div>
</body>

@include('admin.layouts.script-file')

</html>
