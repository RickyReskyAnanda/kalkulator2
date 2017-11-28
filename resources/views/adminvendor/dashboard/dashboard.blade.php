@extends('adminvendor.index')

@section('halaman')
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="2">0</span>
                </div>
                <div class="desc"> Reservasi Hari Ini </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="#">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="10">0</span></div>
                <div class="desc"> Reservasi Bulan Ini </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="98">0</span>
                </div>
                <div class="desc"> Total Reservasi </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="4"></span></div>
                <div class="desc"> Jumlah Ruangan </div>
            </div>
        </a>
    </div>
</div>
<div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->
<div class="row">
    <div class="col-lg-6 col-xs-12 col-sm-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-share font-red-sunglo hide"></i>
                    <span class="caption-subject font-dark bold uppercase">Statistik Reservasi 2017</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="site_activities_loading">
                    <img src="<?=asset('2b212/global/img/loading.gif')?>" alt="loading" /> </div>
                <div id="site_activities_content" class="display-none">
                    <div id="site_activities" style="height: 228px;"> </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
    <div class="col-lg-6 col-xs-12 col-sm-12">
        <div class="portlet light ">
            <div class="portlet-title tabbable-line">
                <div class="caption">
                    <i class=" icon-social-twitter font-dark hide"></i>
                    <span class="caption-subject font-dark bold uppercase">Reservasi Terbaru</span>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_actions_pending" data-toggle="tab"> Pesan </a>
                    </li>
                    <li>
                        <a href="#tab_actions_completed" data-toggle="tab"> Selesai </a>
                    </li>
                </ul>
            </div>
            <div class="portlet-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_actions_pending">
                        <!-- BEGIN: Actions -->
                        <div class="mt-actions">
                            <div class="mt-action">
                                <div class="mt-action-body">
                                    <div class="mt-action-row">
                                        <div class="mt-action-info ">
                                            <div class="mt-action-details ">
                                                <span class="mt-action-author">Muhammad Juanda</span>
                                                <p class="mt-action-desc">Auditorium</p>
                                            </div>
                                        </div>
                                        <div class="mt-action-datetime ">
                                            <span class="mt-action-date">15 November 2017</span>
                                            <span class="mt-action-dot bg-green"></span>
                                            <span class="mt=action-time">9:30-13:00</span>
                                        </div>
                                        <div class="mt-action-buttons ">
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn green btn-sm">Terima</button>
                                                <button type="button" class="btn red btn-sm">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-actions">
                            <div class="mt-action">
                                <div class="mt-action-body">
                                    <div class="mt-action-row">
                                        <div class="mt-action-info ">
                                            <div class="mt-action-details ">
                                                <span class="mt-action-author">Lindasari</span>
                                                <p class="mt-action-desc">Auditorium 2</p>
                                            </div>
                                        </div>
                                        <div class="mt-action-datetime ">
                                            <span class="mt-action-date">16 November 2017</span>
                                            <span class="mt-action-dot bg-green"></span>
                                            <span class="mt=action-time">17:30-22:00</span>
                                        </div>
                                        <div class="mt-action-buttons ">
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn green btn-sm">Terima</button>
                                                <button type="button" class="btn red btn-sm">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-actions">
                            <div class="mt-action">
                                <div class="mt-action-body">
                                    <div class="mt-action-row">
                                        <div class="mt-action-info ">
                                            <div class="mt-action-details ">
                                                <span class="mt-action-author">Asep Indra</span>
                                                <p class="mt-action-desc">Restoran lt.1</p>
                                            </div>
                                        </div>
                                        <div class="mt-action-datetime ">
                                            <span class="mt-action-date">16 November 2017</span>
                                            <span class="mt-action-dot bg-green"></span>
                                            <span class="mt=action-time">9:30-13:00</span>
                                        </div>
                                        <div class="mt-action-buttons ">
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn green btn-sm">Terima</button>
                                                <button type="button" class="btn red btn-sm">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-actions">
                            <div class="mt-action">
                                <div class="mt-action-body">
                                    <div class="mt-action-row">
                                        <div class="mt-action-info ">
                                            <div class="mt-action-details ">
                                                <span class="mt-action-author">Ananda Setia Budi</span>
                                                <p class="mt-action-desc">Meeting Room</p>
                                            </div>
                                        </div>
                                        <div class="mt-action-datetime ">
                                            <span class="mt-action-date">20 November 2017</span>
                                            <span class="mt-action-dot bg-green"></span>
                                            <span class="mt=action-time">Full Day</span>
                                        </div>
                                        <div class="mt-action-buttons ">
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn green btn-sm">Terima</button>
                                                <button type="button" class="btn red btn-sm">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Actions -->
                    </div>
                    <div class="tab-pane" id="tab_actions_completed">
                        <!-- BEGIN:Completed-->
                        <div class="mt-actions">
                            <div class="mt-action">
                                <div class="mt-action-img">
                                    <img src="<?=asset('2b212/pages/media/users/avatar1.jpg')?>" /> </div>
                                <div class="mt-action-body">
                                    <div class="mt-action-row">
                                        <div class="mt-action-info ">
                                            <div class="mt-action-icon ">
                                                <i class="icon-action-redo"></i>
                                            </div>
                                            <div class="mt-action-details ">
                                                <span class="mt-action-author">Frank Cameron</span>
                                                <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                            </div>
                                        </div>
                                        <div class="mt-action-datetime ">
                                            <span class="mt-action-date">3 jun</span>
                                            <span class="mt-action-dot bg-red"></span>
                                            <span class="mt=action-time">9:30-13:00</span>
                                        </div>
                                        <div class="mt-action-buttons ">
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn green btn-sm">Appove</button>
                                                <button type="button" class="btn red btn-sm">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-action">
                                <div class="mt-action-img">
                                    <img src="<?=asset('2b212/pages/media/users/avatar8.jpg')?>" /> </div>
                                <div class="mt-action-body">
                                    <div class="mt-action-row">
                                        <div class="mt-action-info ">
                                            <div class="mt-action-icon ">
                                                <i class="icon-cup"></i>
                                            </div>
                                            <div class="mt-action-details ">
                                                <span class="mt-action-author">Ella Davidson </span>
                                                <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                            </div>
                                        </div>
                                        <div class="mt-action-datetime ">
                                            <span class="mt-action-date">3 jun</span>
                                            <span class="mt-action-dot bg-green"></span>
                                            <span class="mt=action-time">9:30-13:00</span>
                                        </div>
                                        <div class="mt-action-buttons">
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn green btn-sm">Appove</button>
                                                <button type="button" class="btn red btn-sm">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-action">
                                <div class="mt-action-img">
                                    <img src="<?=asset('2b212/pages/media/users/avatar5.jpg')?>" /> </div>
                                <div class="mt-action-body">
                                    <div class="mt-action-row">
                                        <div class="mt-action-info ">
                                            <div class="mt-action-icon ">
                                                <i class=" icon-graduation"></i>
                                            </div>
                                            <div class="mt-action-details ">
                                                <span class="mt-action-author">Jason Dickens </span>
                                                <p class="mt-action-desc">Dummy text of the printing and typesetting industry</p>
                                            </div>
                                        </div>
                                        <div class="mt-action-datetime ">
                                            <span class="mt-action-date">3 jun</span>
                                            <span class="mt-action-dot bg-red"></span>
                                            <span class="mt=action-time">9:30-13:00</span>
                                        </div>
                                        <div class="mt-action-buttons ">
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn green btn-sm">Appove</button>
                                                <button type="button" class="btn red btn-sm">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-action">
                                <div class="mt-action-img">
                                    <img src="<?=asset('2b212/pages/media/users/avatar2.jpg')?>" /> </div>
                                <div class="mt-action-body">
                                    <div class="mt-action-row">
                                        <div class="mt-action-info ">
                                            <div class="mt-action-icon ">
                                                <i class="icon-badge"></i>
                                            </div>
                                            <div class="mt-action-details ">
                                                <span class="mt-action-author">Jan Kim</span>
                                                <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                            </div>
                                        </div>
                                        <div class="mt-action-datetime ">
                                            <span class="mt-action-date">3 jun</span>
                                            <span class="mt-action-dot bg-green"></span>
                                            <span class="mt=action-time">9:30-13:00</span>
                                        </div>
                                        <div class="mt-action-buttons ">
                                            <div class="btn-group btn-group-circle">
                                                <button type="button" class="btn green btn-sm">Appove</button>
                                                <button type="button" class="btn red btn-sm">Reject</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Completed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light calendar ">
            <div class="portlet-title ">
                <div class="caption">
                    <i class="icon-calendar font-dark hide"></i>
                    <span class="caption-subject font-dark bold uppercase">Feeds</span>
                </div>
            </div>
            <div class="portlet-body">
                <div id="calendar"> </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
@endsection
