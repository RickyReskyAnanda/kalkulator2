<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Mitra</h4>
                <p class="category">Pengaturan data Mitra dan Tempat</p>
            </div>
            <div class="content">
                <a class="btn btn-primary load-view" href="{{url('xxx/mitra/tambah')}}" style="margin-bottom: 10px;">Tambah Mitra</a>
                <ul  class="nav nav-tabs">
                    <li class="active">
                        <a  href="#1b" data-toggle="tab" >Mitra</a>
                    </li>
                    <li>
                        <a href="#2b" data-toggle="tab">Tempat</a>
                    </li>
                </ul>
                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1b">
                        <div class="row" style="margin:10px 0;">
                            <div class="col-md-4">
                                <select name="province" class="form-control">
                                    <option>Provinsi</option>
                                    <option value="sulawesi-selatan">Sulawesi Selatan</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="city" class="form-control">
                                    <option>Kota/Kabupaten</option>
                                    <option value="sulawesi-selatan">Sulawesi Selatan</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="district" class="form-control">
                                    <option>Kecamatan</option>
                                    <option value="sulawesi-selatan">Sulawesi Selatan</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Mitra</th>
                                        <th>Email</th>
                                        <th>Kontak</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="data-mitra">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="2b">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Tempat</th>
                                        <th>Jenis Ruangan/Gedung</th>
                                        <th>Waktu</th>
                                        <th>Harga</th>
                                        <th>Alamat</th>
                                        <th>Kecamatan</th>
                                        <th>Kota</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="data-tempat">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var loadData = function(e){
        $.ajax({
            url: "{{url('api/v1/venue')}}",
            success: function(hasil) {
                $("#data-mitra").html("");

                if(hasil.length > 0){
                    hasil.forEach(function(value,index){
                    $("#data-mitra").append(
                        '<tr>'+
                            '<td>'+(index+1)+'</td>'+
                            '<td>'+value.name+'</td>'+
                            '<td>'+value.contact_email+'</td>'+
                            '<td>'+value.contact_number+'</td>'+
                            '<td>'+value.address+'</td>'+
                            '<td>'+
                                '<a class="btn btn-info btn-detail load-view" href="{{url("xxx/mitra/detail")}}/'+value.id_venue+'">Detail</a>'+
                                '<a class="btn btn-success load-view" href="">Tambah Tempat</a>'+
                            '</td>'+
                        '</tr>');
                    });
                }
            }
        });
    }
    loadData();
    $('a[href="#1b"]').click(function(){
        loadData();
    });

    $('a[href="#2b"]').click(function(){
        $.ajax({
            url: "{{url('xxx/tempat/data/content')}}",
            success: function(hasil) {
                $("#data-tempat").html("");

                if(hasil.length > 0){
                    hasil.forEach(function(value,index){
                    $("#data-tempat").append(
                        '<tr>'+
                            '<td>'+(index+1)+'</td>'+
                            '<td>'+value.nama+'</td>'+
                            '<td>'+value.jenis+'</td>'+
                            '<td>'+value.waktu+'</td>'+
                            '<td>'+value.harga+'</td>'+
                            '<td>'+value.lokasi+'</td>'+
                            '<td>'+value.kecamatan+'</td>'+
                            '<td>'+value.kota+'</td>'+
                            '<td>'+
                                '<a class="btn btn-info btn-detail load-view" href="">Detail</a>'+
                                '<a class="btn btn-warning load-view" href="">Edit</a>'+
                            '</td>'+
                        '</tr>');
                    });
                }
            }
        });
    });
</script>