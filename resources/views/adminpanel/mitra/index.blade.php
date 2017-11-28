@extends('adminpanel.index')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Daftar Mitra</a></li>
              <li><a href="#tab_2" data-toggle="tab">Mitra On Progress</a></li>
              <li><a href="#tab_3" data-toggle="tab">Pendaftar</a></li>
              <li><a href="#tab_4" data-toggle="tab">Data</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="btn-group">
                  <a href="<?=$mitracooperate->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
                  <a href="<?=$mitracooperate->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                </div>
                <?=$mitracooperate->firstItem().'-'.$mitracooperate->lastItem().'/'.$mitracooperate->total()?>
                <table class="table table-bordered table-striped" style="margin-top: 10px;">
                  <thead>
                  <tr>
                    <th> No </th>
                    <th> Nama Properti </th>
                    <th> Nama PJ</th>
                    <th> Email </th>
                    <th> Posisi </th>
                    <th> Alamat Properti </th>
                    <th> Banyak Pegawai </th>
                    <th> Banyak Ruangan </th>
                   </tr>
                  </thead>
                  <tbody>
                  <?php $i=($mitracooperate->currentPage()*$mitracooperate->perPage())-9?>
                  @foreach($mitracooperate as $mtr)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>
                      <a href="{{url('adminpanel/mitra/'.$mtr->id_venue)}}"><strong> {{$mtr->venue_name}} </strong></a>
                    </td>
                    <td>{{$mtr->contact_name}}</td>
                    <td>{{$mtr->contact_email}}</td>
                    <td>{{$mtr->contact_position}}</td>
                    <td>{{$mtr->address}}</td>
                    <td>{{$mtr->worker}}</td>
                    <td>{{$mtr->room}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> No </th>
                    <th> Nama Properti </th>
                    <th> Nama PJ</th>
                    <th> Email </th>
                    <th> Posisi </th>
                    <th> Alamat Properti </th>
                    <th> Banyak Pegawai </th>
                    <th> Banyak Ruangan </th>
                  </tr>
                  </tfoot>
                </table>
                <div class="btn-group">
                  <a href="<?=$mitracooperate->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
                  <a href="<?=$mitracooperate->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                </div>
                <?=$mitracooperate->firstItem().'-'.$mitracooperate->lastItem().'/'.$mitracooperate->total()?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="btn-group">
                  <a href="<?=$mitraprogress->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
                  <a href="<?=$mitraprogress->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                </div>
                <?=$mitraprogress->firstItem().'-'.$mitraprogress->lastItem().'/'.$mitraprogress->total()?>
                <table class="table table-bordered table-striped" style="margin-top: 10px;">
                  <thead>
                  <tr>
                    <th> No </th>
                    <th> Nama Properti </th>
                    <th> Nama PJ</th>
                    <th> Email </th>
                    <th> Posisi </th>
                    <th> Alamat Properti </th>
                    <th> Banyak Pegawai </th>
                    <th> Banyak Ruangan </th>
                   </tr>
                  </thead>
                  <tbody>
                  <?php $i=1?>
                  @foreach($mitraprogress as $mtr)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>
                      <a href="{{url('adminpanel/mitra/'.$mtr->id_venue)}}"><strong> {{$mtr->venue_name}} </strong></a>
                    </td>
                    <td>{{$mtr->contact_name}}</td>
                    <td>{{$mtr->contact_email}}</td>
                    <td>{{$mtr->contact_position}}</td>
                    <td>{{$mtr->address}}</td>
                    <td>{{$mtr->worker}}</td>
                    <td>{{$mtr->room}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> No </th>
                    <th> Nama Properti </th>
                    <th> Nama PJ</th>
                    <th> Email </th>
                    <th> Posisi </th>
                    <th> Alamat Properti </th>
                    <th> Banyak Pegawai </th>
                    <th> Banyak Ruangan </th>
                  </tr>
                  </tfoot>
                </table>
                <div class="btn-group">
                  <a href="<?=$mitraprogress->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
                  <a href="<?=$mitraprogress->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                </div>
                <?=$mitraprogress->firstItem().'-'.$mitraprogress->lastItem().'/'.$mitraprogress->total()?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <div class="btn-group">
                  <a href="<?=$mitraregister->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
                  <a href="<?=$mitraregister->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                </div>
                <?=$mitraregister->firstItem().'-'.$mitraregister->lastItem().'/'.$mitraregister->total()?>
                <table class="table table-bordered table-striped" style="margin-top: 10px;">
                  <thead>
                  <tr>
                    <th> No </th>
                    <th> Nama Properti </th>
                    <th> Nama PJ</th>
                    <th> Email </th>
                    <th> Posisi </th>
                    <th> Alamat Properti </th>
                    <th> Banyak Pegawai </th>
                    <th> Banyak Ruangan </th>
                   </tr>
                  </thead>
                  <tbody>
                  <?php $i=1?>
                  @foreach($mitraregister as $mtr)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>
                      <a href="{{url('adminpanel/mitra/'.$mtr->id_venue)}}"><strong> {{$mtr->venue_name}} </strong></a>
                    </td>
                    <td>{{$mtr->contact_name}}</td>
                    <td>{{$mtr->contact_email}}</td>
                    <td>{{$mtr->contact_position}}</td>
                    <td>{{$mtr->address}}</td>
                    <td>{{$mtr->worker}}</td>
                    <td>{{$mtr->room}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> No </th>
                    <th> Nama Properti </th>
                    <th> Nama PJ</th>
                    <th> Email </th>
                    <th> Posisi </th>
                    <th> Alamat Properti </th>
                    <th> Banyak Pegawai </th>
                    <th> Banyak Ruangan </th>
                  </tr>
                  </tfoot>
                </table>
                <div class="btn-group">
                  <a href="<?=$mitraregister->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
                  <a href="<?=$mitraregister->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                </div>
                <?=$mitraregister->firstItem().'-'.$mitraregister->lastItem().'/'.$mitraregister->total()?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                <div class="btn-group">
                  <a href="<?=$mitradata->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
                  <a href="<?=$mitradata->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                </div>
                <?=$mitradata->firstItem().'-'.$mitradata->lastItem().'/'.$mitradata->total()?>
                <table class="table table-bordered table-striped" style="margin-top: 10px;">
                  <thead>
                  <tr>
                    <th> No </th>
                    <th> Nama Properti </th>
                    <th> Nama PJ</th>
                    <th> Email </th>
                    <th> Posisi </th>
                    <th> Alamat Properti </th>
                    <th> Banyak Pegawai </th>
                    <th> Banyak Ruangan </th>
                   </tr>
                  </thead>
                  <tbody>
                  <?php $i=1?>
                  @foreach($mitradata as $mtr)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>
                      <a href="{{url('adminpanel/mitra/'.$mtr->id_venue)}}"><strong> {{$mtr->venue_name}} </strong></a>
                    </td>
                    <td>{{$mtr->contact_name}}</td>
                    <td>{{$mtr->contact_email}}</td>
                    <td>{{$mtr->contact_position}}</td>
                    <td>{{$mtr->address}}</td>
                    <td>{{$mtr->worker}}</td>
                    <td>{{$mtr->room}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> No </th>
                    <th> Nama Properti </th>
                    <th> Nama PJ</th>
                    <th> Email </th>
                    <th> Posisi </th>
                    <th> Alamat Properti </th>
                    <th> Banyak Pegawai </th>
                    <th> Banyak Ruangan </th>
                  </tr>
                  </tfoot>
                </table>
                <div class="btn-group">
                  <a href="<?=$mitradata->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
                  <a href="<?=$mitradata->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
                </div>
                <?=$mitradata->firstItem().'-'.$mitradata->lastItem().'/'.$mitradata->total()?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection