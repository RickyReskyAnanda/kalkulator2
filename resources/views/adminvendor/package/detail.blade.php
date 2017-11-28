
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <div class="container">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Package
                        <small>statistics, charts, recent events and reports</small>
                    </h1>
                </div>
                <!-- END PAGE TITLE -->
            </div>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE CONTENT BODY -->
        <div class="page-content">
            <div class="container">
                <!-- BEGIN PAGE BREADCRUMBS -->
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a class="load-view" href="{{url('vendor/package')}}/{{Request::segment(3)}}">Dashboard</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Package</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMBS -->
                <!-- BEGIN PAGE CONTENT INNER -->
                <div class="page-content-inner">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- BEGIN PORTLET -->
                            <div class="portlet light  tasks-widget">
                                <div class="portlet-title">
                                    <div class="caption caption-md">
                                        <i class="icon-bar-chart theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">{{$data->name}}</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row list-separated profile-stat">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 37 </div>
                                            <div class="uppercase profile-stat-text"> Order </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 51 </div>
                                            <div class="uppercase profile-stat-text"> Views </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <div class="uppercase profile-stat-title"> 61 </div>
                                            <div class="uppercase profile-stat-text"> Comment </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet light  tasks-widget">
                                <div class="portlet-title tabbable-line">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab"> Informations </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab"> Log </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1_1">
                                    <!-- START TASK LIST -->
                                            <ul class="task-list">
                                                <li>
                                                    <div class="task-checkbox">
                                                        <input type="hidden" value="1" name="test">
                                                        <input type="checkbox" class="liChild" value="2" name="test"> </div>
                                                    <div class="task-title">
                                                        <span class="task-title-sp"> Present 2013 Year IPO Statistics at Board Meeting </span>
                                                        <span class="label label-sm label-success">Company</span>
                                                        <span class="task-bell">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span>
                                                    </div>
                                                    <div class="task-config">
                                                        <div class="task-config-btn btn-group">
                                                            <a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false">
                                                                <i class="fa fa-cog"></i>
                                                                <i class="fa fa-angle-down"></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-check"></i> Complete </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Cancel </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                                    <!-- END START TASK LIST -->
                                        </div>
                                        <div class="tab-pane" id="tab_1_2">
                                        aaa
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        <!-- END PORTLET -->
                        </div>
                        <div class="col-md-8">
                            <div class="portlet light  tasks-widget" style="min-height: 335px;">
                                <div class="portlet-title">
                                    <div class="caption caption-md">
                                        <i class="icon-bar-chart theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">Details</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs nav-tabs-lg">
                                            <li class="active">
                                                <a href="#tab_1" data-toggle="tab"> Details Package</a>
                                            </li>
                                            <li>
                                                <a href="#tab_2" data-toggle="tab"> Information</a>
                                            </li>
                                            <li>
                                                <a href="#tab_3" data-toggle="tab"> Payment Rules</a>
                                            </li>
                                            <li>
                                                <a href="#tab_4" data-toggle="tab"> Charge</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span loop-id="listdetail">
                                                            @foreach($data->details as $val)
                                                            @if($val->kind=='detail')
                                                            <div class="bd-example">
                                                                <div class="row row0 move">
                                                                    <div class="col-sm-11 col-padd">
                                                                        <label>{{$val->detail}}</label>
                                                                    </div>
                                                                    <div class="corner-btn">
                                                                        <a href="#editDetails" data-toggle="modal" class="btn btn-sm btn-success btn-circle" id-list="{{$val->id_detail_package}}">
                                                                            <i class="fa fa-pencil"></i> More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                        </span>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <center><a href="javascript:;" class="addLink" id="linkdetail" data-kind="detail">Add Details..</a></center>
                                                            </div>
                                                        </div>
                                                        <div class="bd-input" id="adddetailform">
                                                            <div class="row row0">
                                                                <div class="col-md-12 col10">
                                                                    <textarea name="adddetail" placeholder="Add Details.." class="form-control"></textarea>
                                                                </div>
                                                                <div class="col-md-12 col10">
                                                                    <button class="btn btn-success pull-right saveAdd" data-kind="detail">Save</button>
                                                                    <a href="javascript:;" class="pull-right closeAdd" data-kind="detail" id="closedetail" style="margin: 10px 10px 0px;">Close</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_2">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span loop-id="listinformation">
                                                            @foreach($data->details as $val)
                                                            @if($val->kind=='information')
                                                            <div class="bd-example">
                                                                <div class="row row0 move">
                                                                    <div class="col-sm-11 col-padd">
                                                                        <label>{{$val->detail}}</label>
                                                                    </div>
                                                                    <div class="corner-btn">
                                                                        <a href="#editDetails" data-toggle="modal" class="btn btn-sm btn-success btn-circle" id-list="{{$val->id_detail_package}}">
                                                                            <i class="fa fa-pencil"></i> More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                        </span>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <center><a href="javascript:;" class="addLink" id="linkinformation" data-kind="information">Add Paraghrap..</a></center>
                                                                <div class="bd-input" id="addinformationform">
                                                                    <div class="row row0">
                                                                        <div class="col-md-12 col10">
                                                                            <textarea name="addinformation" rows="3" placeholder="Add Paraghrap.." class="form-control"></textarea>
                                                                        </div>
                                                                        <div class="col-md-12 col10">
                                                                            <button class="btn btn-success pull-right saveAdd" data-kind="information">Save</button>
                                                                            <a href="javascript:;" class="pull-right closeAdd" data-kind="information" id="closeinformation" style="margin: 10px 10px 0px;">Close</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- batas tab pane-->
                                            <div class="tab-pane" id="tab_3">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span loop-id="listpayment-rule">
                                                            @foreach($data->details as $val)
                                                            @if($val->kind=='payment-rule')
                                                            <div class="bd-example">
                                                                <div class="row row0 move">
                                                                    <div class="col-sm-11 col-padd">
                                                                        <label>{{$val->detail}}</label>
                                                                    </div>
                                                                    <div class="corner-btn">
                                                                        <a href="#editDetails" data-toggle="modal" class="btn btn-sm btn-success btn-circle" id-list="{{$val->id_detail_package}}">
                                                                            <i class="fa fa-pencil"></i> More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                        </span>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <center><a href="javascript:;" class="addLink" id="linkpayment-rule" data-kind="payment-rule">Add Rule..</a></center>
                                                            </div>
                                                        </div>
                                                        <div class="bd-input" id="addpayment-ruleform">
                                                            <div class="row row0">
                                                                <div class="col-md-12 col10">
                                                                    <textarea name="addpayment-rule" placeholder="Add Rule.." class="form-control"></textarea>
                                                                </div>
                                                                <div class="col-md-12 col10">
                                                                    <button class="btn btn-success pull-right saveAdd" data-kind="payment-rule">Save</button>
                                                                    <a href="javascript:;" class="pull-right closeAdd" data-kind="payment-rule" id="closepayment-rule" style="margin: 10px 10px 0px;">Close</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- batas tab pane-->
                                            <div class="tab-pane" id="tab_4">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span loop-id="listcharge">
                                                            @foreach($data->details as $val)
                                                            @if($val->kind=='charge')
                                                            <div class="bd-example">
                                                                <div class="row row0 move">
                                                                    <div class="col-sm-11 col-padd">
                                                                        <label>{{$val->detail}}</label>
                                                                    </div>
                                                                    <div class="corner-btn">
                                                                        <a href="#editDetails" data-toggle="modal" class="btn btn-sm btn-success btn-circle" id-list="{{$val->id_detail_package}}">
                                                                            <i class="fa fa-pencil"></i> More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                        </span>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <center><a href="javascript:;" class="addLink" data-kind="charge" id="linkcharge">Add Charge..</a></center>
                                                            </div>
                                                        </div>
                                                        <div class="bd-input" id="addchargeform">
                                                            <div class="row row0">
                                                                <div class="col-md-12 col10">
                                                                    <textarea name="addcharge" placeholder="Add Rule.." class="form-control"></textarea>
                                                                </div>
                                                                <div class="col-md-12 col10">
                                                                    <button class="btn btn-success pull-right saveAdd" data-kind="charge">Save</button>
                                                                    <a href="javascript:;" class="pull-right closeAdd" data-kind="charge" id="closecharge" style="margin: 10px 10px 0px;">Close</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- batas tab pane-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT INNER -->
            </div>
        </div>
        <!-- END PAGE CONTENT BODY -->
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    
</div>
<!-- END CONTAINER -->
<div class="modal fade modal-scroll" id="editDetails" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Details</h4>
            </div>
            <form class="form-horizontal form-bordered form-label-stripped" role="form" id="data-create">
                {{csrf_field()}}
                <div class="modal-body form">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Detail</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" placeholder="insert your name package " required>
                                <span class="help-inline"> Inline help. </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">List</label>
                            <div class="col-md-9">
                                <a href="#">Add List..</a>
                                <ol style="padding-left: 0px;">
                                    <li class="dd-list">aaaaa</li>
                                    <li class="dd-list">aaaaa</li>
                                    <li class="dd-list">aaaaa</li>
                                    <li class="dd-list">aaaaa</li>
                                    <li class="dd-list">aaaaa</li>
                                    <li class="dd-list">aaaaa</li>
                                    <li class="dd-list">aaaaa</li>
                                </ol>
                                <!-- <span class="help-inline"> Inline help. </span> -->
                            </div>
                        </div>
                        <!-- <div class="alert alert-warning">
                            <strong>Warning !</strong> Please select rules before edit. 
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn green">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script type="text/javascript">

$('#adddetailform').hide();
$('#addinformationform').hide();
$('#addpayment-ruleform').hide();
$('#addchargeform').hide();
//show add
$('.addLink').click(function(){
    var kind = $(this).attr('data-kind');
    $('#link'+kind).hide();
    $('#add'+kind+'form').show();
    $('textarea[name=add'+kind+']').val('');
});
// close add
$('.closeAdd').click(function(){
    var kind = $(this).attr('data-kind');
    $('#add'+kind+'form').hide();
    $('#link'+kind).show();
    $('textarea[name=add'+kind+']').val('');
});

var addBd = function(response,kind){
    $('span[loop-id=list'+kind+']').append(
        '<div class="bd-example">'+
            '<div class="row row0 move">'+
                '<div class="col-sm-11 col-padd">'+
                    '<label>'+response.detail+'</label>'+
                '</div>'+
                '<div class="corner-btn">'+
                    '<button class="btn btn-sm btn-success btn-circle">'+
                        '<i class="fa fa-pencil"></i> More</button>'+
                '</div>'+
            '</div>'+
        '</div>'
    );

    $('textarea[name=add'+kind+']').val('');
}

$('.saveAdd').click(function(){
    var values = [];
        values[0] = $('textarea[name=adddetail]').val();
        values[1] = $('textarea[name=addinformation]').val();
        values[2] = $('textarea[name=addpayment-rule]').val();
        values[3] = $('textarea[name=addcharge]').val();
    var kind = $(this).attr('data-kind');
    console.log(values);
    $.ajax({
        type:'post',
        url: "{{asset('vendor/package/detail/create/'.Request::segment(3))}}/"+kind+"/content",
        data:"send="+values+"&_token={{csrf_token()}}",
        success:function(response){
            // console.log(response);
            addBd(response,kind);
            $('#add'+kind+'form').hide();
            $('#link'+kind).show();
        },
        error: function(err){
            console.log(err);
            // var response = JSON.parse(err.responseText);
            // if (response.status == 404) {
            //     $('#modal').html(response.page)
            // }
        }
    });
});
//     $.fn.pageMe = function(opts){
//     var $this = this,
//         defaults = {
//             perPage:4,
//             showPrevNext: false,
//             hidePageNumbers: false
//         },
//         settings = $.extend(defaults, opts);
    
//     var listElement = $this;
//     var perPage = settings.perPage; 
//     var children = listElement.children();
//     var pager = $('.pager');
    
//     if (typeof settings.childSelector!="undefined") {
//         children = listElement.find(settings.childSelector);
//     }
    
//     if (typeof settings.pagerSelector!="undefined") {
//         pager = $(settings.pagerSelector);
//     }
    
//     var numItems = children.size();
//     var numPages = Math.ceil(numItems/perPage);

//     pager.data("curr",0);
    
//     if (settings.showPrevNext){
//         $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
//     }
    
//     var curr = 0;
//     while(numPages > curr && (settings.hidePageNumbers==false)){
//         $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
//         curr++;
//     }
    
//     if (settings.showPrevNext){
//         $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
//     }
    
//     pager.find('.page_link:first').addClass('active');
//     pager.find('.prev_link').hide();
//     if (numPages<=1) {
//         pager.find('.next_link').hide();
//     }
//       pager.children().eq(1).addClass("active");
    
//     children.hide();
//     children.slice(0, perPage).show();
    
//     pager.find('li .page_link').click(function(){
//         var clickedPage = $(this).html().valueOf()-1;
//         goTo(clickedPage,perPage);
//         return false;
//     });
//     pager.find('li .prev_link').click(function(){
//         previous();
//         return false;
//     });
//     pager.find('li .next_link').click(function(){
//         next();
//         return false;
//     });
    
//     function previous(){
//         var goToPage = parseInt(pager.data("curr")) - 1;
//         goTo(goToPage);
//     }
     
//     function next(){
//         goToPage = parseInt(pager.data("curr")) + 1;
//         goTo(goToPage);
//     }
    
//     function goTo(page){
//         var startAt = page * perPage,
//             endOn = startAt + perPage;
        
//         children.css('display','none').slice(startAt, endOn).show();
        
//         if (page>=1) {
//             pager.find('.prev_link').show();
//         }
//         else {
//             pager.find('.prev_link').hide();
//         }
        
//         if (page<(numPages-1)) {
//             pager.find('.next_link').show();
//         }
//         else {
//             pager.find('.next_link').hide();
//         }
        
//         pager.data("curr",page);
//         pager.children().removeClass("active");
//         pager.children().eq(page+1).addClass("active");
    
//     }
// };

// $(document).ready(function(){
    
//   $('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:3});
    
// });
</script>