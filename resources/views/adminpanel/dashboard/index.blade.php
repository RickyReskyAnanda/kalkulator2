@extends('adminpanel.index')

@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-danger pull-right">HARIAN</span>
                <h5>Pemesanan</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">40 886,200</h1>
                <div class="stat-percent font-bold text-danger">98% <i class="fa fa-bolt"></i></div>
                <small>Total Pemesanan</small>
            </div>

            <div class="ibox-content">
                <h3>Pendapatan</h3>
                <h1 class="no-margins">Rp.275,800</h1>
                <div class="stat-percent font-bold text-danger">20% <i class="fa fa-level-up"></i></div>
                <small>Total Pendapatan</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-primary pull-right">MINGGUAN</span>
                <h5>Pemesanan</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">40 886,200</h1>
                <div class="stat-percent font-bold ">98% <i class="fa fa-bolt"></i></div>
                <small>Total Pemesanan</small>
            </div>                                    
            <div class="ibox-content">
                <h3>Pendapatan</h3>
                <h1 class="no-margins">Rp.275,800</h1>
                <div class="stat-percent font-bold ">20% <i class="fa fa-level-up"></i></div>
                <small>Total Pendapatan</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right">BULANAN</span>
                <h5>Pemesanan</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">40 886,200</h1>
                <div class="stat-percent font-bold text-info">98% <i class="fa fa-bolt"></i></div>
                <small>Total Pemesanan</small>
            </div>
          
            <div class="ibox-content">
                <h3>Pendapatan</h3>
                <h1 class="no-margins">Rp.275,800</h1>
                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                <small>Total Pendapatan</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-success pull-right">TAHUNAN</span>
                <h5>Pemesanan</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">40 886,200</h1>
                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                <small>Total Pemesanan</small>
            </div>
            
            <div class="ibox-content">
                <h3>Pendapatan</h3>
                <h1 class="no-margins">Rp.275,800</h1>
                <div class="stat-percent font-bold text-success">20% <i class="fa fa-level-up"></i></div>
                <small>Total Pendapatan</small>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="widget style1 lazur-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-cubes fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> Rooms </span>
                    <h2 class="font-bold">260</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="widget style1 yellow-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-bank fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> Vendors </span>
                    <h2 class="font-bold">260</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection