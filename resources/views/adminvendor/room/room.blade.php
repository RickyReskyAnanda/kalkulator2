@extends('adminvendor.index')

@section('halaman')

<h1 class="page-title"> Ruangan</h1>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Beranda</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Ruangan</span>
        </li>
    </ul>
</div>
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-map-marker"></i>Daftar Ruangan </div>
                <div class="actions">
                    <a href="<?=url('vendor/room/add')?>" class="btn btn-circle btn-info">
                        <i class="fa fa-plus"></i>
                        <span class="hidden-xs"> Tambah Ruangan </span>
                    </a>
                    <!-- <div class="btn-group open">
                        <a class="btn btn-circle btn-default dropdown-toggle" href="javascript:;" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-share"></i>
                            <span class="hidden-xs"> Tools </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;"> Export to Excel </a>
                            </li>
                            <li>
                                <a href="javascript:;"> Export to CSV </a>
                            </li>
                            <li>
                                <a href="javascript:;"> Export to XML </a>
                            </li>
                            <li class="divider"></li>
                            <a href="javascript:;"> Print Invoices </a>
                            
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="portlet-body">
                <div class="search-page search-content-4">
                    <div class="search-table table-responsive">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead class="bg-blue">
                                <tr>
                                    <th>
                                        <a href="javascript:;">Diperbaharui</a>
                                    </th>
                                    <th>
                                        <a href="javascript:;">Nama</a>
                                    </th>
                                    <th>
                                        <a href="javascript:;">Tipe</a>
                                    </th>
                                    <th>
                                        <a href="javascript:;">Status</a>
                                    </th>
                                    <th>
                                        <a href="javascript:;">Kelola</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-date font-blue">
                                        <a href="javascript:;">October 17, 2015</a>
                                    </td>
                                    <td class="table-title">
                                        <h3>
                                            <a href="javascript:;">Metronic Admin Reborn</a>
                                        </h3>
                                        <p>Reservasi Terakhir:
                                            <span class="font-grey-cascade">25 Agustus 2017</span>
                                        </p>
                                    </td>
                                    <td>
                                        <h4>Meeting Room</h4>
                                    </td>
                                    <td class="table-download">
                                        <span class="label label-success">Open</span>
                                    </td>
                                    <td class="table-status">
                                        <a href="<?=url('vendor/room/1')?>">
                                            <i class="icon-arrow-right font-blue"></i>
                                        </a>
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

@endsection