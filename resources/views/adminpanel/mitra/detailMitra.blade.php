<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1>Admin Vanue</h1>
    </div>
    <!-- END PAGE TITLE -->
    <!-- BEGIN PAGE TOOLBAR -->
</div>
<!-- END PAGE HEAD-->
<!-- BEGIN PAGE BREADCRUMB -->
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="{{url('kepompong/beranda')}}">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{url('kepompong/mitra')}}">Mitra</a>
        <i class="fa fa-circle"></i>
    </li>
     <li>
        <span class="active">Detail Venue</span>
    </li>
</ul>
<div class="portlet light profile-sidebar-portlet">
    <div class="row">
        <div class="col-lg-3 col-xs-12 col-sm-12" style="padding: 0px !important" >
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" style="width: 260px;height: 200px" id="blah">
                <form class="edit" style="position: absolute; bottom: 2px ; left: 2px;">
                    <input type="file" id="imgInp" class="hide_file">
                     <i class="fa fa-pencil"><span> Edit</span></i>
                </form>
            </div>
        </div>
        <div class="col-lg-9 col-xs-12 col-sm-12">
            <h3 style="margin-top: 0px;margin-bottom: 2px">Balai Pernikahan 27 Makassar</h3>
            <span style="font-size: 13px;">Desa Nusa Kecamatan Kahu Kabupaten Bone</span>
            <div class="portlet-body" style="padding: 25px 0px">
                <div class="row static-info">
                    <div class="col-md-2 name"> Disctrict: </div>
                    <div class="col-md-10 "> Jhon Doe </div>
                </div>
                <div class="row static-info">
                    <div class="col-md-2 name">City: </div>
                    <div class="col-md-10 "> jhon@doe.com </div>
                </div>
                <div class="row static-info">
                    <div class="col-md-2 name"> Provinci: </div>
                    <div class="col-md-10"> New York </div>
                </div>
                <a href="javascript:;" class="btn btn-sm" style="position: absolute; top: 0px ; right: 0px;">
                    <button type="button" class="btn btn-success" style="background: #3192f9; border:1px solid #3192f9;" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-pencil"></i>
                        <span> Edit</span>
                    </button>
            </div>
        </div>
    </div>
</div>
<div class="portlet light profile-sidebar-portlet">
    <div class="row">
         <div class="col-lg-12 col-xs-12 col-sm-12">
            <div class="portlet light">
                <div class="portlet-body">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1_1" data-toggle="tab" aria-expanded="true"> Room </a>
                        </li>
                        <li class="">
                            <a href="#tab_1_2" data-toggle="tab" aria-expanded="false"> Facility </a>
                        </li>
                        <li class="">
                            <a href="#tab_1_3" data-toggle="tab" aria-expanded="false"> Policy </a>
                        </li>
                        <li class="">
                            <a href="#tab_1_4" data-toggle="tab" aria-expanded="false"> Description </a>
                        </li>
                        <li class="">
                            <a href="#tab_1_5" data-toggle="tab" aria-expanded="false"> Review </a>
                        </li>
                        <li class="">
                            <a href="#tab_1_6" data-toggle="tab" aria-expanded="false"> Galery </a>
                        </li>
                         <li class="">
                            <a href="#tab_1_7" data-toggle="tab" aria-expanded="false"> Setting </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab_1_1">
                           <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <div style="margin-bottom: 20px">
                                        <button type="button" class="btn btn-default" style="border-color: #3192f9; border:2px solid #3192f9;">
                                            <i class="fa fa-plus" style="color: #3192f9"></i>
                                            <span> Tambah</span>
                                        </button>
                                    </div>
                                    <div class="table-scrollable">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> Name </th>
                                                    <th> Addres </th>
                                                    <th> District </th>
                                                    <th> City </th>
                                                    <th> Province </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Mark </td>
                                                    <td> Otto </td>
                                                    <td> makr124 </td>
                                                    <td> makr124 </td>
                                                    <td> makr124 </td>
                                                    <td>
                                                       <button type="button" class="btn btn-default" style="border-color: #3192f9; border:2px solid #3192f9;">
                                                        <span> Detail</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_1_2">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <div style="margin-bottom: 20px">
                                        <button type="button" class="btn btn-default" style="border-color: #3192f9; border:2px solid #3192f9;">
                                            <i class="fa fa-plus" style="color: #3192f9"></i>
                                            <span> Tambah</span>
                                        </button>
                                    </div>
                                    <div class="portlet light portlet-fit bordered">
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th> No </th>
                                                            <th> Fasilitas </th>
                                                            <th> Free </th>
                                                            <th> Berbayar </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> Mark </td>
                                                            <td>
                                                                <i class="fa fa-check" style="color: #3192f9"></i>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td> 2 </td>
                                                            <td> Jacob </td>
                                                            <td></td>
                                                            <td>
                                                                <i class="fa fa-check" style="color: #3192f9"></i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> 2 </td>
                                                            <td> Larry </td>
                                                             <td>
                                                                   <i class="fa fa-check" style="color: #3192f9"></i>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td> 3 </td>
                                                            <td> Sandy </td>
                                                            <td> </td>
                                                            <td>
                                                                <i class="fa fa-check" style="color: #3192f9"></i>
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
                        <div class="tab-pane fade" id="tab_1_3">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                   <h3>Balai Pernikahan</h3>
                                    <p>
                                        Agar tak terkesan monoton dalam pemasangan gambar (begitu-begitu aja) kita bisa memodifikasinya dengan merubah letak gambar yang berbeda-beda disetiap tulisan. seperti gaya tulisan di majalah-majalah dan situs-situs berita misalnya. Oleh sebab itu Topik kali ini kita akan membahas cara membuat posisi gambar ilustrasi berada disamping awal teks/tulisan/postingan, caranya lumayan cukup sederhana, hanya tinggal menambahkan beberapa kode HTML (tag, atribut) ke dalam gambar dan teks tersebut, dan bisa di lakukan dengan beberapa cara. Meski begitu namanya manusia tempatnya lupa dan salah, maka saya dokumentasikan disini.
                                    </p>

                                </div>
                            </div>
                        </div> 
                        <div class="tab-pane fade" id="tab_1_4">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <h3>Balai Pernikahan</h3>
                                    <p>
                                        Agar tak terkesan monoton dalam pemasangan gambar (begitu-begitu aja) kita bisa memodifikasinya dengan merubah letak gambar yang berbeda-beda disetiap tulisan. seperti gaya tulisan di majalah-majalah dan situs-situs berita misalnya. Oleh sebab itu Topik kali ini kita akan membahas cara membuat posisi gambar ilustrasi berada disamping awal teks/tulisan/postingan, caranya lumayan cukup sederhana, hanya tinggal menambahkan beberapa kode HTML (tag, atribut) ke dalam gambar dan teks tersebut, dan bisa di lakukan dengan beberapa cara. Meski begitu namanya manusia tempatnya lupa dan salah, maka saya dokumentasikan disini.
                                    </p>

                                </div>
                            </div>
                        </div>   
                        <div class="tab-pane fade" id="tab_1_5">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <div class="mt-comment">
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">Natasha Kim</span> -
                                                <span class="mt-comment-date">19 Dec,09:50 AM</span> 
                                            </div>
                                            <div class="mt-comment-text"> 
                                                <p><b><i>"keren"</i></b></p>
                                                The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="portlet-body">
                                    <div class="mt-comment">
                                        <div class="mt-comment-body">
                                            <div class="mt-comment-info">
                                                <span class="mt-comment-author">Natasha Kim</span> -
                                                <span class="mt-comment-date">19 Dec,09:50 AM</span> 
                                            </div>
                                            <div class="mt-comment-text"> 
                                                <p><b><i>"keren"</i></b></p>
                                                The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="tab-pane fade" id="tab_1_6">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <div class="row">
                                        <h4>Masukkan Gambar</h4>
                                        <form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="upload.php" class="but">
                                            <input type="hidden" name="image_form_submit" value="1"/>
                                            <label>Pilih Gambar</label>
                                            <input type="file" name="images[]" id="images" class="hide_file" multiple >
                                        </form>
                                        <div class="row" style="padding-top: 50px">
                                            <div class="form-actions right">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn blue">Submit</button>
                                                    <button type="button" class="btn default">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding-top: 20px">
                                        <div class="col-lg-3 col-md-4 col-xs-6">
                                            <a href="#" >
                                                <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                                            </a>           </div>
                                        <div class="col-lg-3 col-md-4 col-xs-6">
                                            <a href="#" >
                                                <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-xs-6">
                                            <a href="#" >
                                                <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-xs-6">
                                           <a href="#" >
                                             <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-xs-6">
                                            <a href="#" >
                                                <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-xs-6">
                                            <a href="#">
                                                <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-xs-6">
                                            <a href="#" class="">
                                                <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                                            </a>
                                        </div>
                                          <div class="col-lg-3 col-md-4 col-xs-6">
                                            <a href="#" class="">
                                                <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                                            </a>
                                        </div>
                                          <div class="col-lg-3 col-md-4 col-xs-6">
                                            <a href="#" class="">
                                                <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                                            </a>
                                        </div>
                                    </div>
                               </div>
                           </div>
                       </div>
                       <div class="tab-pane fade" id="tab_1_7">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                   <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle accordion-toggle-styled"> Apakah Anda Yakin Ingin Menghapus Vanue Ini ? </a>
                                                <button type="button" class="btn btn-success" style="background: #3192f9; border:2px solid #3192f9;margin-left: 470px">
                                                    <i class="fa fa-trash" style="color: #3192f9"></i>
                                                    <span> Hapus</span>
                                                </button>
                                            </h4>
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
</div>
<!-- END PAGE BASE CONTENT -->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
  <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Vanue</h4>
        </div>
        <div class="modal-body">
            <form role="form">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="contact_name" class="form-control" required> 
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="contact_email" class="form-control" required> 
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No. Telpon/HP</label>
                                <input type="number" name="contact_number" class="form-control"> 
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Posisi</label>
                                <input type="text" name="position" class="form-control" > 
                            </div>   
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Properti</label>
                                <input type="text" name="venue_name" class="form-control" > 
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banyak Pegawai</label>
                                <input type="number" name="worker" class="form-control" > 
                            </div>   
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banyak Ruangan</label>
                                <input type="number" name="room" class="form-control" > 
                            </div>   
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="address" class="form-control" rows="3"></textarea>
                            </div>   
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <select class="form-control" name="Kecamatan">
                                    <option value="sulawesi-selatan" selected="">Kahu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Kabupaten/kota</label>
                                <select class="form-control" name="kota">
                                    <option value="sulawesi-selatan" selected="">Kahu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select class="form-control" name="provinsi">
                                    <option value="sulawesi-selatan" selected="">Kahu</option>
                                </select>
                            </div>
                        </div>
                 
                         <div class="col-md-4">
                           <div class="form-group">
                                <label>Email Kantor</label>
                                <input type="Email" name="email" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>No.Telepon Kantor</label>
                                <input type="text" name="Telepon" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Kode Pos</label>
                                 <input type="number" name="kode" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label>Informasi</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">save</button>
        </div>
    </div>
</div>
</div>


<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
</script>