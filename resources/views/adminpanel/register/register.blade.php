<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Register</h1>
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PAGE TOOLBAR -->
</div>
<!-- END PAGE HEAD-->
<!-- BEGIN PAGE BREADCRUMB -->
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="{{url('kepompong/dashboard')}}">Beranda</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span class="active">Register</span>
    </li>
</ul>
<!-- END PAGE BREADCRUMB -->
<!-- BEGIN PAGE BASE CONTENT -->
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12">
        <div class="portlet light">
                <div class="portlet-body">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab1" data-toggle="tab" aria-expanded="true"> Mendaftar </a>
                        </li>
                        <li class="">
                            <a href="#tab2" data-toggle="tab" aria-expanded="false"> Diproses </a>
                        </li>
                        <li class="">
                            <a href="#tab2" data-toggle="tab" aria-expanded="false"> Ditolak </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab1">
                           <div class="portlet portlet-fit">
                                
                                <div class="portlet-title" style="border:0;">
                                    <div class="caption">
                                        <span class="caption-subject font-dark bold uppercase">Daftar Mitra Cooperate</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row" style="margin-bottom: 20px;">
                                        <div class="col-md-8">
                                        
                                        <button type="button" class="btn btn-success" style="background: #3192f9; border:1px solid #3192f9;">
                                            <i class="fa fa-plus-square"></i>
                                            <span> Tambah Mitra</span>
                                        </button>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Pencarian"> 
                                                <span class="input-group-addon">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> Nama </th>
                                                    <th> Email </th>
                                                    <th> Posisi </th>
                                                    <th> Nama Properti </th>
                                                    <th> Alamat Properti </th>
                                                    <th> Banyak Pegawai </th>
                                                    <th> Banyak Ruangan </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody id="listMitra">
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="dataTables_info" id="showing1" role="status" aria-live="polite"></div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_2_paginate">
                                                <ul class="pagination" style="visibility: visible;">
                                                    <li class="prev" id="prev1">
                                                        <a href="javascript:;" title="Prev">
                                                            <i class="fa fa-angle-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="next" id="next1">
                                                        <a href="javascript:;" title="Next">
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="tab2">
                            <div class="portlet light portlet-fit">
                                <div class="form-group">
                                    <div class="input-group" style="width: 300px;margin-left: 710px">
                                        <input type="text" class="form-control" placeholder="Pencarian"> 
                                        <span class="input-group-addon">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject font-dark bold uppercase">List Venue</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> Nama </th>
                                                    <th> Email </th>
                                                    <th> No Telepon </th>
                                                    <th> Kabupaten/Kota </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody id="">
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Mark </td>
                                                    <td> Otto </td>
                                                    <td> makr124 </td>
                                                    <td> makr124 </td>
                                                    <td>
                                                        <button type="button" class="btn btn-success">Detail</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BASE CONTENT -->
<script type="text/javascript">
    var appendData = function(hasil){
        $('#listMitra').html('');
        if(hasil.data.length>0){
            for (var i = 0; i < hasil.data.length; i++) { 
                var view = '<tr><td>'+(hasil.from+i)+'</td><td> '+hasil.data[i]["contact_name"]+' </td><td> '+hasil.data[i]["contact_email"]+' </td><td> '+hasil.data[i]["contact_position"]+' </td><td> '+hasil.data[i]["venue_name"]+' </td><td> '+hasil.data[i]["worker"]+' </td><td> '+hasil.data[i]["room"]+' </td><td> '+hasil.data[i]["address"]+' </td><td><a href="{{url('kepompong/mitra/detail')}}/'+hasil.data[i].id_venue+'" class="btn btn-success btn-sm load-view">Detail</a></td></tr>';
                $('#listMitra').append(view);
            }
            $('#showing1').html('Showing '+hasil.from+' to '+hasil.to+' of '+hasil.total+' records');

        }else{
            var view = '<tr><td colspan="9" style="text-align:center">'+
                        '<h3>Data Kosong !</h3>'+
                        '</td></tr>';
            $('#listMitra').append(view);
        }    
    }
    var page = 1;
    var loadData = function(){
        $('#listMitra').html('<tr><td colspan="9" style="text-align:center">'+
                        '<h4>Loading..</h4>'+
                        '</td></tr>');
        $.ajax({
            type:"get",
            url: "{{url('kepompong/mitra/list/data?page=')}}"+page,
            success: function(hasil){
                appendData(hasil);
            },
            error:function(hasil){
                alert(hasil);
            }
        });

    }
    loadData();
    
    $('#prev1').click(function(){
        if(page >1 ){
            page =page-1;
            loadData();
        }
    });
    $('#next1').click(function(){
        page = page + 1;
        loadData();
    });

</script>