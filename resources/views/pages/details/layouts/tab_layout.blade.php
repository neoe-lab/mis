@extends('layouts.main_layout')
{{-- content --}}
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">ข้อมูลและสถิติ</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">1
                            <li class="breadcrumb-item active">2</li>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            @yield('tab-content')

        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Page Wrapper -->
@endsection
{{-- end content --}}

{{-- javaScript --}}
@section('chart-custom')
    @yield('tab-script')
@endsection
{{-- end javaScript --}}
