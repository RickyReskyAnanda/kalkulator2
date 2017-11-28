@extends('adminvendor.index')

@section('halaman')

<h1 class="page-title"> Venue</h1>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Beranda</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Venue</span>
        </li>
    </ul>
</div>
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <div class="form-horizontal form-row-seperated" action="#">
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-shopping-cart"></i>Test Product </div>
                    <div class="actions btn-set">
                        <button type="button" name="back" class="btn btn-secondary-outline">
                            <i class="fa fa-angle-left"></i> Back</button>
                        <button class="btn btn-success">
                            <i class="fa fa-check"></i> Save</button>
                        <button class="btn btn-success">
                        <i class="fa fa-print"></i> Print</button>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="tabbable-bordered">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_umum" data-toggle="tab"> Umum </a>
                            </li>
                            <li>
                                <a href="#tab_galeri" data-toggle="tab"> Galeri </a>
                            </li>
                            <li>
                                <a href="#tab_fasilitas" data-toggle="tab"> Fasilitas </a>
                            </li>
                            <li>
                                <a href="#tab_waktu" data-toggle="tab"> Waktu Operasional </a>
                            </li>
                            <li>
                                <a href="#tab_pengaturan" data-toggle="tab"> Pengaturan </a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <!-- TABS -->
                            <div class="tab-pane active" id="tab_umum">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nama : </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control maxlength-handler" name="" maxlength="100" placeholder="">
                                            <span class="help-block"> max 100 chars </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Alamat :</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control maxlength-handler" rows="3" name="product[meta_keywords]" maxlength="1000"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Telpon :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control maxlength-handler" name="" maxlength="100" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Fax :</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control maxlength-handler" name="" maxlength="100" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END. TABS -->
                            <!-- IMAGE TABS -->
                            <div class="tab-pane" id="tab_galeri">
                                <div class="alert alert-success margin-bottom-10">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                    <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified. </div>
                                <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
                                    <a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn btn-success">
                                        <i class="fa fa-plus"></i> Select Files </a>
                                    <a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn btn-primary">
                                        <i class="fa fa-share"></i> Upload Files </a>
                                </div>
                                <div class="row">
                                    <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"> </div>
                                </div>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th width="8%"> Image </th>
                                            <th width="25%"> Label </th>
                                            <th width="8%"> Sort Order </th>
                                            <th width="10%"> Base Image </th>
                                            <th width="10%"> Small Image </th>
                                            <th width="10%"> Thumbnail </th>
                                            <th width="10%"> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="../assets/pages/media/works/img1.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                    <img class="img-responsive" src="../assets/pages/media/works/img1.jpg" alt=""> </a>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="product[images][1][label]" value="Thumbnail image"> </td>
                                            <td>
                                                <input type="text" class="form-control" name="product[images][1][sort_order]" value="1"> </td>
                                            <td>
                                                <label>
                                                    <input type="radio" name="product[images][1][image_type]" value="1"> </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="radio" name="product[images][1][image_type]" value="2"> </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="radio" name="product[images][1][image_type]" value="3" checked> </label>
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-default btn-sm">
                                                    <i class="fa fa-times"></i> Remove </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../assets/pages/media/works/img2.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                    <img class="img-responsive" src="../assets/pages/media/works/img2.jpg" alt=""> </a>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="product[images][2][label]" value="Product image #1"> </td>
                                            <td>
                                                <input type="text" class="form-control" name="product[images][2][sort_order]" value="1"> </td>
                                            <td>
                                                <label>
                                                    <input type="radio" name="product[images][2][image_type]" value="1"> </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="radio" name="product[images][2][image_type]" value="2" checked> </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="radio" name="product[images][2][image_type]" value="3"> </label>
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-default btn-sm">
                                                    <i class="fa fa-times"></i> Remove </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../assets/pages/media/works/img3.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                    <img class="img-responsive" src="../assets/pages/media/works/img3.jpg" alt=""> </a>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="product[images][3][label]" value="Product image #2"> </td>
                                            <td>
                                                <input type="text" class="form-control" name="product[images][3][sort_order]" value="1"> </td>
                                            <td>
                                                <label>
                                                    <input type="radio" name="product[images][3][image_type]" value="1" checked> </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="radio" name="product[images][3][image_type]" value="2"> </label>
                                            </td>
                                            <td>
                                                <label>
                                                    <input type="radio" name="product[images][3][image_type]" value="3"> </label>
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="btn btn-default btn-sm">
                                                    <i class="fa fa-times"></i> Remove </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END IMAGE TABS -->
                            <!--FACILITY TABS -->
                            <div class="tab-pane" id="tab_fasilitas">
                                <button class="btn btn-sm green btn-outline sbold" style="margin-bottom: 10px;" type="button" data-toggle="modal" href="#edit">Tambah</button>
                                <div class="form-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr role="row" class="heading">
                                                <th> No </th>
                                                <th> Nama </th>
                                                <th> Aksi </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="10%">1</td>
                                                <td width="60%">LCD</td>
                                                <td width="30%">
                                                    <button class="btn green btn-sm sbold" type="button" data-toggle="modal" href="#edit">Edit</button>
                                                    <button class="btn red btn-sm sbold" type="button">Hapus</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- END FASILITAS TABS -->
                            <!-- WAKTU TABS -->
                            <div class="tab-pane" id="tab_waktu">
                                <div class="form-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr role="row" class="heading">
                                                <th width="15%"> Hari </th>
                                                <th width="30%"> Buka </th>
                                                <th width="55%"> Rentang Waktu </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align: middle; ">Senin  </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option1" checked> Buka
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option2"> Tutup
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="col-md-4">
                                                        <label>Buka</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tutup</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle; ">Selasa </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option1" checked> Buka
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option2"> Tutup
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="col-md-4">
                                                        <label>Buka</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tutup</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle; ">Rabu </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option1" checked> Buka
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option2"> Tutup
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="col-md-4">
                                                        <label>Buka</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tutup</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle; ">Kamis </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option1" checked> Buka
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option2"> Tutup
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="col-md-4">
                                                        <label>Buka</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tutup</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle; ">Jumat </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option1" checked> Buka
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option2"> Tutup
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="col-md-4">
                                                        <label>Buka</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tutup</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle; ">Sabtu </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option1" checked> Buka
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option2"> Tutup
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="col-md-4">
                                                        <label>Buka</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tutup</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle; ">Minggu </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option1" checked> Buka
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option2"> Tutup
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle; ">
                                                    <div class="col-md-4">
                                                        <label>Buka</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Tutup</label>
                                                        <select class="form-control">
                                                            <option>--:--</option>
                                                            <option>00:00</option>
                                                            <option>01:00</option>
                                                            <option>02:00</option>
                                                            <option>03:00</option>
                                                            <option>04:00</option>
                                                            <option>05:00</option>
                                                            <option>06:00</option>
                                                            <option>07:00</option>
                                                            <option>08:00</option>
                                                            <option>09:00</option>
                                                            <option>10:00</option>
                                                            <option>11:00</option>
                                                            <option>12:00</option>
                                                            <option>13:00</option>
                                                            <option>14:00</option>
                                                            <option>15:00</option>
                                                            <option>16:00</option>
                                                            <option>17:00</option>
                                                            <option>18:00</option>
                                                            <option>19:00</option>
                                                            <option>20:00</option>
                                                            <option>21:00</option>
                                                            <option>22:00</option>
                                                            <option>23:00</option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END. WAKTU TABS -->
                            <!-- PENGATURAN TABS -->
                            <div class="tab-pane" id="tab_pengaturan">
                                <div class="form-body">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <td>Sembunyikan data dari publik ?</td>
                                                <td>
                                                    <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option1" checked> Buka
                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                            <input type="radio" name="optionsRadios" value="option2"> Tutup
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END PENGATURAN TABS -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="edit" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Edit Fasilitas</h4>
            </div>
            <div class="modal-body">
                <div class="row" style="margin: 10px 0;">
                    <label class="col-md-3">Nama Fasilitas :</label>
                    <div class="col-md-8">
                        <input type="number" class="form-control maxlength-handler" name="" maxlength="5" placeholder="">
                    </div>
                </div>
                <div class="row" style="margin: 10px 0;">
                    <label class="col-md-3">Status Pembayaran :</label>
                    <div class="col-md-8">
                        <select class="form-control">
                            <option value="berbayar">Berbayar</option>
                            <option value="gratis">Gratis</option>
                        </select>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn green">Tambah</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- SCRIPT FASILITAS -->
<script>
    var kondisi = 'tambah';
    $('#tambahfasilitas').click(function(){
        kondisi = 'tambah';
    });
    $('#editfasilitas').click(function(){
        kondisi = 'edit';
    });

    
</script>
<!-- END SCRIPT FASILITAS -->

@endsection
