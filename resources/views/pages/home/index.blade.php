@extends('layouts.main_layout')

@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title text-center">โรงพยาบาลทุ่งยางแดง</h3>
                        {{-- <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            {{-- start section 1 --}}
            <div class="row">
                {{-- row 1 --}}
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card-group m-b-30">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <h4 class="card-title text-center"><i class="la la-folder"></i> สถิติผู้รับบริการ IPD วันนี้</h4>
                                <div class="statistics">
                                    <div class="row">
                                        <div class="col-md-6 col-6 text-center">
                                            <div class="stats-box mb-4">
                                                <p>จำนวนเตียงทั้งหมด</p>
                                                <h3>00</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6 text-center">
                                            <div class="stats-box mb-4">
                                                <p>เตียงที่ว่าง</p>
                                                <h3>0</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="progress mb-4">
                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 22%"
                                        aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">22%</div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 24%"
                                        aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">24%</div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 26%"
                                        aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">21%</div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                        aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">10%</div>
                                </div> --}}
                                <div>
                                    <h4 class="mb-1"><i class="fa fa-dot-circle-o text-primary mr-2"></i>รับใหม่วันนี้ <span
                                            class="float-right">0</span></h4>
                                    <h4 class="mb-1"><i class="fa fa-dot-circle-o text-secondary mr-2"></i>จำหน่ายวันนี้ <span
                                            class="float-right">0</span></h4>
                                    <h4 class="mb-1"><i class="fa fa-dot-circle-o text-purple mr-2"></i>admit อยู่ <span
                                            class="float-right">0</span></h4>
                                    <h4 class="mb-1"><i class="fa fa-dot-circle-o text-success mr-2"></i>สิทธ์ UC <span
                                            class="float-right">0</span></h4>
                                    <h4 class="mb-1"><i class="fa fa-dot-circle-o text-danger mr-2"></i>สิทธิ์อื่นๆ <span
                                            class="float-right">0</span></h4>
                                    <h4 class="mb-1"><i class="fa fa-dot-circle-o text-warning mr-2"></i>เตียงว่าง <span
                                            class="float-right">0</span></h4>
                                    <h4 class="mb-1"><i class="fa fa-dot-circle-o text-info mr-2"></i>สิทธิ์ชำระและเบิกได้ <span
                                            class="float-right">0</span></h4>
                                    <h4 class="mb-1"><i class="fa fa-dot-circle-o text-dark mr-2"></i>อัตราการครองเตียง <span
                                            class="float-right">0</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card-group m-b-30">
                        <a href="{{ route('detail-visit')}}" class="card">
                            <div class="card-body bg-success text-white">
                                <div class="text-center">
                                    <h3 class="text-title">ผู้รับบริการ วันนี้</h3>
                                    <h1 class="mb-3"> <i class="la la-stethoscope"></i> 0</h1>
                                    <p class="mb-0">(เดือนนี้ 0 คน / 0 ครั้ง)</p>
                                </div>
                            </div>   
                        </a>
                    </div>
                    <div class="card-group m-b-30">
                        <a href="{{ route('detail-er')}}" class="card">
                            <div class="card-body bg-danger text-white">
                                <div class="text-center">
                                    <h3 class="text-title">ER วันนี้</h3>
                                    <h1 class="mb-3"> <i class="la la-taxi"></i> 0</h1>
                                    <p class="mb-0">(เดือนนี้ 0 คน / 0 ครั้ง)</p>
                                </div>
                            </div>                           
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card-group m-b-30">
                        <a href="{{ route('detail-opd')}}" class="card">
                            <div class="card-body bg-info text-white">
                                <div class="text-center">
                                    <h3 class="text-title">OPD วันนี้</h3>
                                    <h1 class="mb-3"> <i class="la la-id-card"></i> 0</h1>
                                    <p class="mb-0">(เดือนนี้ 0 คน / 0 ครั้ง)</p>
                                </div>
                            </div>   
                        </a>
                    </div>
                    <div class="card-group m-b-30">
                        <div class="card">
                            <div class="card-body bg-info text-white">
                                <div class="text-center">
                                    <h3 class="text-title">PCU วันนี้</h3>
                                    <h1 class="mb-3"> <i class="la la-hospital-o"></i> 0</h1>
                                    <p class="mb-0">(เดือนนี้ 0 คน / 0 ครั้ง)</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card-group m-b-30">

                        <div class="card">
                            <div class="card-body bg-warning text-white">
                                <div class="text-center">
                                    <h3 class="text-title">Admit วันนี้</h3>
                                    <h1 class="mb-3"> <i class="la la-bed"></i> 0</h1>
                                    <p class="mb-0">(เดือนนี้ 0 คน / 0 ครั้ง)</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="card-group m-b-30">
                        <div class="card">
                            <div class="card-body bg-warning text-white">
                                <div class="text-center">
                                    <h3 class="text-title">X-RAY วันนี้</h3>
                                    <h1 class="mb-3"> <i class="la la-close"></i> 0</h1>
                                    <p class="mb-0">(เดือนนี้ 0 คน / 0 ครั้ง)</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>

                {{-- row 3 --}}
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card-group m-b-30">
                        <div class="card">
                            <div class="card-body bg-dark text-white">
                                <div class="text-center">
                                    <h3 class="text-title">LAB วันนี้</h3>
                                    <h1 class="mb-3"> <i class="la la-flask"></i> 0</h1>
                                    <p class="mb-0">(เดือนนี้ 0 คน / 0 ครั้ง)</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card-group m-b-30">
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 class="text-title">กายภาพบำบัด วันนี้</h3>
                                    <h1 class="mb-3"> <i class="fa fa-wheelchair"></i> 0</h1>
                                    <p class="mb-0">(เดือนนี้ 0 คน / 0 ครั้ง)</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card-group m-b-30">
                        <div class="card">
                            <div class="card-body bg-purple text-white">
                                <div class="text-center">
                                    <h3 class="text-title">แพทย์แผนไทย วันนี้</h3>
                                    <h1 class="mb-3"> <i class="la la-fist-raised"></i> 0</h1>
                                    <p class="mb-0">(เดือนนี้ 0 คน / 0 ครั้ง)</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card-group m-b-30">
                        <div class="card bg-purple text-white">
                            <div class="card-body">
                                <div class="text-center">
                                    <h3 class="text-title">ทันตกรรม วันนี้</h3>
                                    <h1 class="mb-3"> <i class="la la-user-md"></i> 0</h1>
                                    <p class="mb-0">(เดือนนี้ 0 คน / 0 ครั้ง)</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            {{-- end section 1 --}}


            {{-- start section 2 --}}
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h3 class="card-title mb-0 text-center"><i class="la la-road"></i> 10 อันดับโรคผู้ป่วยนอก OPD</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>ICD10/Diag</th>
                                            <th>ชาย</th>
                                            <th>หญิง</th>
                                            <th class="text-right">รวม</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i=0;$i<10;$i++)
                                            
                                       
                                        <tr>
                                            <td>
                                                <h4><i class="la la-hashtag"></i><a href="project-view.html">J028</a></h4>
                                                <small class="block text-ellipsis">
                                                    <h0 class="text-dark"><i class="la la-caret-square-right"></i> Acute pharyngitis due to other specified organisms</h0>
                                                
                                                    </small>
                                            </td>
                                            <td>
                                                <div>
                                                    <h3><i class="la la-user-tie"></i>
                                                    0 </h3>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h3><i class="la la-user-nurse"></i>
                                                    0</h3>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <h3><i class="la la-user-friends"></i>
                                                0</h3>
                                            </td>
                                        </tr> 
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                        </div>
                       
                    </div>
                </div>


                {{-- 222 --}}
                <div class="col-md-6 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h3 class="card-title mb-0 text-center"><i class="la la-folder-open"></i> 10 อันดับโรคผู้ป่วยใน IPD</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>ICD10/Diag</th>
                                            <th>ชาย</th>
                                            <th>หญิง</th>
                                            <th class="text-right">รวม</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i=0;$i<10;$i++)
                                            
                                       
                                        <tr>
                                            <td>
                                                <h4><i class="la la-hashtag"></i><a href="#">J028</a></h4>
                                                <small class="block text-ellipsis">
                                                    <h0 class="text-dark"><i class="la la-caret-square-right"></i> Acute pharyngitis due to other specified organisms</h0>
                                                
                                                    </small>
                                            </td>
                                            <td>
                                                <div>
                                                    <h3><i class="la la-user-tie"></i>
                                                    0 </h3>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h3><i class="la la-user-nurse"></i>
                                                    0</h3>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <h3><i class="la la-user-friends"></i>
                                                0</h3>
                                            </td>
                                        </tr> 
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                   
                        </div>
                    </div>
                </div>
            </div>
            {{-- end secttion 2 --}}

            {{-- start chart --}}
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 text-center d-flex">
                            <div class="card flex-fill">
                                <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <h3 class="card-title">Overview</h3>
                                    <canvas id="lineChart" style="display: block; width: 096px; height: 298px;" class="chartjs-render-monitor" width="096" height="298"></canvas>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div> --}}



        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Page Wrapper -->
@endsection



{{-- @section('chart-custom')
@include('pages.charts.visit-odp')
@endsection --}}
