@extends('layouts.main_layout')
@section('content')
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title text-center">ตัวชี้วัดองค์กร</h3>
                        {{-- <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul> --}}
                    </div>
                </div>
            </div>
            <!-- /Page Header -->



            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ตัวชี้วัด</th>
                                <th>ตุลาคม</th>
                                <th>พฤศจิกายน</th>
                                <th>ธันวาคม</th>
                                <th>มกราคม</th>
                                <th>กุมภาพันธ์</th>
                                <th>มีนาคม</th>
                                <th>เมษายน</th>
                                <th>พฤษภาคม</th>
                                <th>มิถุนายน</th>
                                <th>กรกฎาคม</th>
                                <th>สิงหาคม</th>
                                <th>กันยายน</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a class="avatar avatar-xs" href="profile.html"><img alt=""
                                                src="assets/img/profiles/avatar-09.jpg"></a>
                                        <a href="profile.html">อัตราการติดเชื้อในโรงพยาบาล</a>
                                    </h2>
                                </td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a class="avatar avatar-xs" href="profile.html"><img alt=""
                                                src="assets/img/profiles/avatar-09.jpg"></a>
                                        <a href="profile.html">อัตราการล้างมือก่อนทำหัตถการ</a>
                                    </h2>
                                </td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a class="avatar avatar-xs" href="profile.html"><img alt=""
                                                src="assets/img/profiles/avatar-09.jpg"></a>
                                        <a href="profile.html">อัตราการล้างมือหลังทำหัตถการ</a>
                                    </h2>
                                </td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a class="avatar avatar-xs" href="profile.html"><img alt=""
                                                src="assets/img/profiles/avatar-09.jpg"></a>
                                        <a href="profile.html">อัตราการเกิดอุบัติการณ์ความคลาดเลื่อนทางยาที่มีความ</a>
                                    </h2>
                                </td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                                <td><i class="fa fa-close text-danger"></i> </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <h2>
                                        
                                        ร้อยละความถูกต้องของการจ่าย/ให้ยา (LASA)
                                    </h2>
                                </td>
                                <td><a href="javascript:void(0);">0.00</td>
                                <td><a href="javascript:void(0);">0.00</a></td>
                                <td><a href="javascript:void(0);">0.00</a></td>
                                <td><a href="javascript:void(0);">0.00</a></td>
                                <td><a href="javascript:void(0);">0.00</a></td>
                                <td><a href="javascript:void(0);">0.00</a></td>
                                <td><a href="javascript:void(0);">0.00</a></td>
                                <td><a href="javascript:void(0);">0.00</a></td>
                                <td><a href="javascript:void(0);">0.00</a></td>
                                <td><a href="javascript:void(0);">0.00</a></td>
                                <td><a href="javascript:void(0);">0.00</a></td>
                                <td><a href="javascript:void(0);">0.00</a></td>
                                
                            </tr>
        



                        </tbody>
                    </table>
                </div>
            </div>

































        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Page Wrapper -->
@endsection
