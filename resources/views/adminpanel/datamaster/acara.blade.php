@extends('adminpanel.index')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title header-primary">
                    <h3 style="color: white;">Acara</h3>                    
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered table-hover " id="fasilitas" >
                        <thead>
                            <tr>
                                <th style="width: 5%;">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus-square"> Tambah</i></button>
                                </th>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Urutan Pilihan</th>
                                <th>Urutan Menu</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <button class="btn btn-info " type="button">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger " type="button">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                                <td>1</td>
                                <td>Wifi</td>
                                <td>
                                    <img src="icon.png" class="img-responsive" alt="">
                                </td>
                                <td>Yes</td>                                                              
                            </tr> 
                            <tr>
                                <td>
                                    <button class="btn btn-info " type="button">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger " type="button">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                                <td>1</td>
                                <td>Wifi</td>
                                <td>
                                    <img src="icon.png" class="img-responsive" alt="">
                                </td>
                                <td>Yes</td>                                                              
                            </tr> 
                            <tr>
                                <td>
                                    <button class="btn btn-info " type="button">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger " type="button">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                                <td>1</td>
                                <td>Wifi</td>
                                <td>
                                    <img src="icon.png" class="img-responsive" alt="">
                                </td>
                                <td>Yes</td>                                                              
                            </tr>                            
                        </tbody>
                    </table>
                </div>
            </div>

    </div>

</div>

@endsection