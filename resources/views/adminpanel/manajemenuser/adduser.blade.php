@extends('adminpanel.index')

@section('content')
<div class="row">
    <div class="col-md-7">        
        <div class="ibox-content">
            <h3 class="m-t-none m-b">Profile</h3>            
            <br>
                <form method="get" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">No. Tlp</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <div class="i-checks">
                                <label> <input type="radio" value="option1" name="a"> <i></i>Laki-Laki</label>
                            </div>
                            <div class="i-checks">
                                <label> <input type="radio" checked="" value="option2" name="a"> <i></i>Perempuan</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="" class="form-control">
                        </div>
                    </div>                   
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Provinsi</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="account">
                                <option hidden="">Pilih Provinsi</option>
                                <option>Sulsel</option>
                                <option>Jawa Timur</option>
                                <option>Sulteng</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kota</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="account">
                                <option hidden="">Kab/Kota</option>
                                <option>Makassar</option>
                                <option>Maros</option>
                                <option>Gowa</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">  
                            <button class="btn btn-primary " type="button"><i class="fa fa-check"></i>&nbsp;SUbmit</button>  
                        </div> 
                    </div>                       
                </form>
        </div>    
    </div>

    <div class="col-md-5">        
        <div class="ibox-content">
            <h3 class="m-t-none m-b">Sign in</h3>
            <p>Masukkan Email atau Pasword baru anda</p>
            <br>
                <form method="get" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="New Email" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                    </div> 
                    <br>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">  
                            <button class="btn btn-primary " type="button"><i class="fa fa-check"></i>&nbsp;Update</button>  
                        </div> 
                    </div>                                                     
                </form>
        </div>    
    </div>
</div>

@endsection