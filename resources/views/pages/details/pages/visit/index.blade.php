@extends('pages.details.layouts.tab_layout')
@section('tab-content')

       

        <!-- Search Filter -->
        <div class="row filter-row text-center">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus select-focus">
                    <select class="select floating">
                        <option>กรุณาเลือกปีงบประมาณ</option>
                        <option>2565</option>
                        <option>2561</option>
                    </select>
                    <label class="focus-label">ปีงบ</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">From</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                    <label class="focus-label">To</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#" class="btn btn-success btn-block">ค้นหา</a>
            </div>
        </div>
        <!-- /Search Filter -->

        <!-- Content Starts -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><i class="la la-id-card"></i> ผู้รับบริการ<span class="text-secondary">
                                ปีงบประมาณ 2565 (1 ต.ค.2564 - 23 ก.ย.2565)</span></h4>
                        <ul class="nav nav-tabs nav-tabs-top">
                            <li class="nav-item"><a class="nav-link active" href="#top-tab1" data-toggle="tab">กราฟ</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#top-tab2" data-toggle="tab">ตาราง</a></li>
                            <li class="nav-item"><a class="nav-link" href="#top-tab3" data-toggle="tab">หมายเหตุ</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            {{-- start tab 1 --}}
                            <div class="tab-pane show active" id="top-tab1">
                                    @include('pages.details.pages.opd.tab1')
                            </div>
                            {{-- end tab 1 --}}
                            {{-- start tab 2 --}}
                            <div class="tab-pane" id="top-tab2">
                                @include('pages.details.pages.opd.tab2')
                            </div>
                            {{-- end tab 2 --}}
                            {{-- start tab 3 --}}
                            <div class="tab-pane" id="top-tab3">
                                @include('pages.details.pages.opd.tab3')
                            </div>
                            {{-- end tab 3 --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Content End -->

@endsection

@section('tab-script')
<script type="text/javascript">
    Highcharts.chart('demochart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'แสดงจำนวนผู้รับบริการ ปีงบประมาณ 2565'
        },
        xAxis: {
            categories: ['ตุลาคม', 'พฤศจิกายน','ธันวาคม','มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฏาคม','สิงหาคม','กันยายน']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'จำนวน(ราย)'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                }
            }
        },
        series: [{
            name: 'ผู้ป่วยใน',
            color: '#ff0000',
            data: [1090,1080,1027,1074,1258,1769,2039,1250,1070,1081,1315,959]
        }, {
            name: 'ผู้ป่วยนอก',
            color: '#3399cc',
            data: [39786,41062,37618,29248,26725,30032,23877,20612,22517,18572,25435,17459]
        }]
    });
    </script>
@endsection