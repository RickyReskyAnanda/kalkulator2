@extends('adminpanel.index')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title header-warning">
                    <h3 style="color: white;">Acara</h3>                    
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered table-hover " id="fasilitas" >
                        <thead>
                            <tr>
                                <th style="width: 5%;">
                                    <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus-square"> Tambah</i></button>
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
                                    <button class="btn btn-danger" type="button">
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

             <!-- modaal tambah -->

            <div class="modal inmodal" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-content animated bounceInRight">
                                <div class="modal-header header-warning">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" style="color: white;">Acara</h4>                                    
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">                                            
                                            <form role="form">
                                                <div class="form-group"><label>Nama Acara</label> 
                                                    <input type="text" placeholder="Masukkan Nama Acara" class="form-control">
                                                </div>
                                                <div class="form-group"><label>Urutan Pilihan</label>                                                
                                                    <select class="form-control" name="account">
                                                        <option hidden="">-Pilih-</option>
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                        <option>option 3</option>
                                                    </select>
                                                </div>
                                                <div class="form-group"><label>Urutan Menu</label>                                                
                                                    <select class="form-control" name="account">
                                                        <option hidden="">-Pilih-</option>
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                        <option>option 3</option>
                                                    </select>
                                                </div> 
                                            </form>                               
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Keluar</button>
                                    <button type="button" class="btn btn-warning">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>



    </div>
</div>

@endsection