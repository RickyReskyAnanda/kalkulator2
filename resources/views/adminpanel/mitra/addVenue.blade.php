<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><i></i>Dashboard</a></li>
        <li><a href="#"><i></i>Vanue</a></li>
        <li class="active">Add Venue</li>
    </ol>
</div> 
<div class="row col-md-12">
    <a class="btn btn-primary load-view" href="{{url('xxx/venue')}}" style="margin-bottom: 10px;">Back</a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <form role="form" id="data-create">
            <div class="content">
                <div class="header">
                    <h3 class="title">Add Vanue</h3>
                    <hr>
                </div>
                <div class="row">

                    <div class="col-md-8">
                        <div class="col-md-12"> 
                            <div class="form-group">
                                 <label class="botton">Nama</label>
                                <input class="form-control" name="nama" placeholder="Nama Mitra" type="text">
                                <span id="errNama"></span>
                            </div>
                        </div>
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label class="botton">Alamat</label>
                                <textarea rows="3" class="form-control" name="alamat" placeholder="Deskripsi" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                             <label class="botton">Foto</label>
                            <img class="img-responsive" id="blah" src="#" alt="your image" />
                            <input type='file'  name="foto" id="imgInp"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="botton">Provinsi</label>
                            <select class="form-control" name="provinsi" id="province">
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="botton">Kabupaten/Kota</label>
                            <select class="form-control" name="kabupaten" id="regency">
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="botton">Kecamatan</label>
                            <select class="form-control" name="kecamatan" id="district">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="botton">E-Mail</label>
                            <input class="form-control" name="email" placeholder="E-Mail" type="email">
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="botton">No.Telepon</label>
                            <input class="form-control" name="nomor" placeholder="no.Telepon" type="text">
                        </div>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="botton">Kerja Sama </label>
                            <br>
                            <input type="radio" name="kerjasama" value="1">YA
                            <br>
                            <input type="radio" name="kerjasama" value="0" checked="checked"/>TIDAK
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="botton">Informasi</label>
                            <textarea rows="5" class="form-control" name="informasi" placeholder="Informasi"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                        </div>
                    </div>
                </div>
            </div> 
            </form>
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


    function region(area,id){
        return $.ajax({
            url:"{{url('api/v1/region')}}/"+area+"/"+id,
            success:function(data){
                console.log(data);
                $("#"+area).html("");
                data.forEach(function(value,index){
                    $("#"+area).append('<option value="'+value.id+'">'+value.name+'</option>');
                });
            }
        });
    }

    region('province',0);

    $('#province').change(function(){
        region('regency',$('#province').val());
        // alert($('#province').val());
    });
    $('#regency').change(function(){
        region('district',$('#regency').val());
    });



    $('#data-create').on('submit',(function(e) {
            e.preventDefault();
            
            var formData = new FormData(this);
            // $('#data-create').hide();
        
            $.ajax({
                type:'POST',
                url: "{{url('api/v1/venue')}}",//$(this).attr('action'),
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    console.log(data);
                    // $('#data-create').show();
                    // urlchange("");
                },
                error: function(data){
                    // var err=data.responseJSON;
                    // $('#errJudul').html(err.judul);
                    // $('#errGambar').html(err.gambar);
                    // $('#errIsi').html(err.isi);
                    console.log(data);

                    // $('#data-create').show();

                }
            });
        }));
</script>