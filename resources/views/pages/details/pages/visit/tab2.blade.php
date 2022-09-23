<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>เดือน-ปี</th>
                        <th>จำนวนผู้ป่วยนอก (ราย)</th>
                        <th>จำนวนผู้ป่วยใน (ราย)</th>
                        <th>จำนวนผู้รับบริการรวม (ราย)</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i =0;$i<=10;$i++)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>1 Jan 2020</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    @endfor                                                                                                   
                </tbody>
            </table>
        </div>
    </div>
</div>