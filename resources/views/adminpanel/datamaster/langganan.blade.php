@extends('adminpanel.index')

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title header-success">
                    <h3 style="color: white;">Langganan</h3>                    
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered table-hover " id="fasilitas" >
                        <thead>
                            <tr>
                                <th style="width: 10%;">Action</th>
                                <th>No</th>
                                <th>Email</th>
                                <th>Waktu</th>                                                            
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
                                                                                            
                            </tr>                            
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

</div>



@endsection