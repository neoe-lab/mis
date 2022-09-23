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
                <h4 class="card-title"><i class="la la-id-card"></i><i class="la la-taxi"></i>  งานอุบัติเหตุและฉุกเฉิน<span class="text-secondary">
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
                            @include('pages.details.pages.er.tab1')
                    </div>
                    {{-- end tab 1 --}}
                    {{-- start tab 2 --}}
                    <div class="tab-pane" id="top-tab2">
                        @include('pages.details.pages.er.tab2')
                    </div>
                    {{-- end tab 2 --}}
                    {{-- start tab 3 --}}
                    <div class="tab-pane" id="top-tab3">
                        @include('pages.details.pages.er.tab3')
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
    // Create the chart
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'ผู้ป่วยอุบัติเหตุ ปีงบประมาณ 2565'
        },
        subtitle: {
            text: 'โรงพยาบาลสมเด็จพระยุพราชกุฉินารายณ์'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'จำนวน(ราย)'
            }
    
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f}'
                }
            }
        },
    
        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b><br/>'
        },
    
        "series": [
            {
                "name": "ผู้ป่วยอุบัติเหตุ",
                "colorByPoint": true,
                "data": [
                    {
                        "name": "ตุลาคม",
                        "y": 222,
                        "drilldown": "ตุลาคม"
                    },
                    {
                        "name": "พฤศจิกายน",
                        "y": 243,
                        "drilldown": "พฤศจิกายน"
                    },
                    {
                        "name": "ธันวาคม",
                        "y": 285,
                        "drilldown": "ธันวาคม"
                    },
                    {
                        "name": "มกราคม",
                        "y": 223,
                        "drilldown": "มกราคม"
                    },
                    {
                        "name": "กุมภาพันธ์",
                        "y": 199,
                        "drilldown": "กุมภาพันธ์"
                    },
                    {
                        "name": "มีนาคม",
                        "y": 196,
                        "drilldown": "มีนาคม"
                    },
                    {
                        "name": "เมษายน",
                        "y": 175,
                        "drilldown": "เมษายน"
                    },
                    {
                        "name": "พฤษภาคม",
                        "y": 237,
                        "drilldown": "พฤษภาคม"
                    },
                    {
                        "name": "มิถุนายน",
                        "y": 267,
                        "drilldown": "มิถุนายน"
                    },
                    {
                        "name": "กรกฎาคม",
                        "y": 212,
                        "drilldown": "กรกฎาคม"
                    },
                    {
                        "name": "สิงหาคม",
                        "y": 236,
                        "drilldown": "สิงหาคม"
                    },
                    {
                        "name": "กันยายน",
                        "y": 180,
                        "drilldown": "กันยายน"
                    }
                ]
            }
        ],
        "drilldown": {
            "series": [
                {
                    "name": "ตุลาคม",
                    "id": "ตุลาคม",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',1],
                        ['ผู้ป่วยอุบัติเหตุจราจร',221]
                    ]
                },
                {
                    "name": "พฤศจิกายน",
                    "id": "พฤศจิกายน",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',243],
                        ['ผู้ป่วยอุบัติเหตุจราจร',]
                    ]
                },
                {
                    "name": "ธันวาคม",
                    "id": "ธันวาคม",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',285],
                        ['ผู้ป่วยอุบัติเหตุจราจร',]
                    ]
                },
                {
                    "name": "มกราคม",
                    "id": "มกราคม",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',3],
                        ['ผู้ป่วยอุบัติเหตุจราจร',220]
                    ]
                },
                {
                    "name": "กุมภาพันธ์",
                    "id": "กุมภาพันธ์",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',1],
                        ['ผู้ป่วยอุบัติเหตุจราจร',198]
                    ]
                },
                {
                    "name": "มีนาคม",
                    "id": "มีนาคม",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',1],
                        ['ผู้ป่วยอุบัติเหตุจราจร',195]
                    ]
                },
                {
                    "name": "เมษายน",
                    "id": "เมษายน",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',1],
                        ['ผู้ป่วยอุบัติเหตุจราจร',174]
                    ]
                },
                {
                    "name": "พฤษภาคม",
                    "id": "พฤษภาคม",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',237],
                        ['ผู้ป่วยอุบัติเหตุจราจร',]
                    ]
                },
                {
                    "name": "มิถุนายน",
                    "id": "มิถุนายน",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',267],
                        ['ผู้ป่วยอุบัติเหตุจราจร',]
                    ]
                },
                {
                    "name": "กรกฎาคม",
                    "id": "กรกฎาคม",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',212],
                        ['ผู้ป่วยอุบัติเหตุจราจร',]
                    ]
                },
                {
                    "name": "สิงหาคม",
                    "id": "สิงหาคม",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',236],
                        ['ผู้ป่วยอุบัติเหตุจราจร',]
                    ]
                },
                {
                    "name": "กันยายน",
                    "id": "กันยายน",
                    "data": [
                        ['ผู้ป่วยอุบัติเหตุ',180],
                        ['ผู้ป่วยอุบัติเหตุจราจร',]
                    ]
                }
            ]
        }
    });
    </script>
    
    <script type="text/javascript">
    Highcharts.chart('container2', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'แสดงสัดส่วน ระดับความฉุกเฉิน'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'ร้อยละ',
            colorByPoint: true,
            data: [
                ['Non Urgency (รอได้)', 19145],
                ['Semi Urgency (ด่วน)', 11818],
                ['Urgency (ด่วนมาก)', 7567],
                ['Emergency (ฉุกเฉินเร่งด่วน)', 484],
                ['Resuscitate (กู้ชีพทันที)', 262],
                {
                    name: '',
                    y: 32,
                    sliced: true,
                    selected: true
                }
            ]
        }]
    });
    </script>
@endsection