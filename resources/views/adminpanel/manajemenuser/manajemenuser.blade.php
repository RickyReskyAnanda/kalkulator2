@extends('adminpanel.index')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title header-primary">
                    <h3 style="color: white;">Fasilitas</h3>                    
                </div>
                <div class="ibox-content">
                    <div class="">
                        <a class="btn btn-success ">Tambah Fasilitas</a>
                    </div>
                    <table class="table table-striped table-bordered table-hover " id="fasilitas" >
                        <thead>
                            <tr>
                                <th style="width: 7px;">No</th>
                                <th style="width: 10%;">Icon</th>
                                <th>Nama</th>
                                <th style="width: 4%;">Show</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="nomor">
                                <td>1</td>
                                <td><i class="fa fa-wifi"></i></td>
                                <td>Wifi</td>
                                <td class="center">
                                    <div class="switch">
                                        <div class="onoffswitch">
                                            <input type="checkbox" checked class="onoffswitch-checkbox" id="show1">
                                            <label class="onoffswitch-label" for="show1">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <button class="btn btn-warning " type="button"><i class="fa fa-paste"></i> Edit</button>
                                    <button class="btn btn-danger " type="button"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                            <tr class="gradeC">
                                <td>2</td>
                                <td><i class="fa fa-trash"></i></td>
                                <td>Tempat Sampah</td>
                                <td class="center">
                                     <div class="switch">
                                        <div class="onoffswitch">
                                            <input type="checkbox" checked class="onoffswitch-checkbox" id="show2">
                                            <label class="onoffswitch-label" for="show2">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <button class="btn btn-warning " type="button"><i class="fa fa-paste"></i> Edit</button>
                                    <button class="btn btn-danger " type="button"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>3</td>
                                <td><i class="fa fa-car"></i></td>
                                <td>Mobil</td>
                                <td class="center">
                                    <div class="switch">
                                        <div class="onoffswitch">
                                            <input type="checkbox" checked class="onoffswitch-checkbox" id="show3">
                                            <label class="onoffswitch-label" for="show3">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <button class="btn btn-warning " type="button"><i class="fa fa-paste"></i> Edit</button>
                                    <button class="btn btn-danger " type="button"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    <!-- Langganan -->
    <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title header-primary">
                    <h3 style="color:white;">Langganan</h3>                    
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered table-hover " id="langganan" >
                        <thead>
                            <tr>
                                <th style="width: 7px;">No</th>
                                <th>Email</th>
                                <th>Waktu</th>                                                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="nomor">
                                <td>1</td>
                                <td>LCD</td>
                                <td>Details</td>
                            </tr>
                            <tr class="gradeC">
                                <td>2</td>
                                <td>Sound System</td>
                                <td>Win 95+</td>
                            </tr>
                            <tr class="gradeA">
                                <td>3</td>
                                <td>Coffee Break</td>
                                <td>Win 95+</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>


    <!-- Event -->
    <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title header-primary">
                    <h3 style="color: white;">Event</h3>                    
                </div>
                <div class="ibox-content">
                    <div class="">
                        <a onclick="fnClickAddRow();" href="javascript:void(0);" class="btn btn-success ">Tambah Fasilitas</a>
                    </div>
                    <table class="table table-striped table-bordered table-hover " id="kegiatan" >
                        <thead>
                            <tr>
                                <th style="width: 7px;">No</th>
                                <th>Nama</th>
                                <th>Urutan Pilihan</th>                                                                
                                <th>Urutan Menu </th>                                                                
                                <th style="width: 12%;">Action</th>                                                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="nomor">
                                <td>1</td>
                                <td>LCD</td>
                                <td>Details</td>
                                <td>Details</td>
                                <td style="text-align: center;">
                                    <button class="btn btn-warning " type="button"><i class="fa fa-paste"></i> Edit</button>
                                    <button class="btn btn-danger " type="button"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                            <tr class="gradeC">
                                <td>2</td>
                                <td>Sound System</td>
                                <td>Win 95+</td>
                                <td>Win 95+</td>
                                <td style="text-align: center;">
                                    <button class="btn btn-warning " type="button"><i class="fa fa-paste"></i> Edit</button>
                                    <button class="btn btn-danger " type="button"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>3</td>
                                <td>Coffee Break</td>
                                <td>Win 95+</td>
                                <td>Win 95+</td>
                                <td style="text-align: center;">
                                    <button class="btn btn-warning " type="button"><i class="fa fa-paste"></i> Edit</button>
                                    <button class="btn btn-danger " type="button"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

</div>

@endsection