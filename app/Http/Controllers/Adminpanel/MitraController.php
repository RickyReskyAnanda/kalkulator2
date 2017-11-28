<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Exception;
//model
use App\Model\MitraModel;
use App\Model\TempatModel;
use App\Model\VenueModel;
use Image;
use File;
use Auth;

class MitraController extends Controller
{
	public function viewIndex(){
        $mitracooperate = VenueModel::where('cooperate','3')->paginate(10);
        $mitraprogress  = VenueModel::where('cooperate','2')->paginate(10);
        $mitraregister  = VenueModel::where('cooperate','1')->paginate(10);
        $mitradata      = VenueModel::where('cooperate','0')->paginate(10);

        // return $mitra;
        return view('adminpanel.mitra.index',compact('mitracooperate','mitraprogress','mitraregister','mitradata'));
    }

    public function viewAdd(Request $request,$content = null){
        if (!is_null($content)) {
            if ($request->ajax()) {

                $response = [
                     'page' => view('kepompong.mitra.addmitra')->render(),
                     'timestamp' => microtime(true)
                 ];
                return response()->json($response);

            }
        }
        return view('kepompong.admin');
    }

    public function viewDetail(Request $request,$id,$content = null){
        if (!is_null($content)) {
            if ($request->ajax()) {

                $detail = VenueModel::find($id);
                $response = [
                     'page' => view('kepompong.mitra.detailMitra',compact('detail'))->render(),
                     'timestamp' => microtime(true)
                 ];
                return response()->json($response);

            }
        }
        return view('kepompong.index');
    }

    public function viewTambahTempat(Request $request,$id,$content = null){
        if (!is_null($content)) {
            if ($request->ajax()) {

                $detail = MitraModel::find($id);
                $response = [
                     'page' => view('kepompong.mitra.tambahTempat',compact('detail'))->render(),
                     'timestamp' => microtime(true)
                ];
                return response()->json($response);
            }
        }
        return view('kepompong.admin');
    }

    public function viewDetailTempat(Request $request,$id,$content = null){
        if (!is_null($content)) {
            if ($request->ajax()) {

                $detail = TempatModel::find($id);
                $mitra = MitraModel::find($detail->id_mitra);
                $detail->namamitra = $mitra->nama;
                $response = [
                     'page' => view('kepompong.mitra.detailTempat',compact('detail'))->render(),
                     'timestamp' => microtime(true)
                ];
                return response()->json($response);
            }
        }
        return view('kepompong.admin');
    }

    public function createTempat(Request $request, $content=null){

        /*
        * validasi format
        * validasi database
        * proses
        * error handler
        */
        if (!is_null($content)) {
            if ($request->ajax()) {
                $this->validate($request, [
                    'mtr'        => 'required',
                    'nama'       => 'required',
                    'jenis'      => 'required',
                    'harga'      => 'required',
                    'waktu'      => 'required',
                    'kapasitas'  => 'required',
                    'lokasi'     => 'required',
                    'provinsi'   => 'required',
                    'kota'       => 'required',
                    'kecamatan'  => 'required',
                    'keterangan' => 'max:1000',
                ]);

                $TempatModel = new TempatModel;

                $TempatModel->id_mitra   = $request->mtr;
                $TempatModel->nama   = $request->nama;
                $TempatModel->jenis  = $request->jenis;
                $TempatModel->harga  = $request->harga;
                $TempatModel->lokasi = $request->alamat;
                $TempatModel->waktu  = $request->waktu;
                $TempatModel->kapasitas = $request->kapasitas;
                $TempatModel->lokasi = $request->lokasi;
                $TempatModel->provinsi = $request->provinsi;
                $TempatModel->kota   = $request->kota;
                $TempatModel->kecamatan = $request->kecamatan;
                $TempatModel->keterangan = $request->keterangan;
                $TempatModel->remember_token = $request->_token;

                    // give image uploded a name with extension

                if($request->hasFile('foto')){
                    $TempatModel->foto = date('Ymdhis').'.'.$request->foto->getClientOriginalExtension();
                    //upload image 
                    $request->foto->move(public_path('images/tempat/'),$TempatModel->foto);

                    //resize image
                    $pathFind = public_path('images/tempat/'.$TempatModel->foto);
                    $pathSave = public_path('images/tempat/thumb/'.$TempatModel->foto);
                    Image::make($pathFind)->resize(200, 200)->save($pathSave);
                }else{
                    $TempatModel->foto="default.jpg";                    
                }
                // save to databases

                try {
                    $TempatModel->save();
                } catch (\Exception $exception){
                    return Exception::error500($exception);
                    // return response()->json(["message" => $exception->getMessage()]);
                }
            }
        }
    }

    public function updateTempat(Request $request, $content=null){
        /*
        * validasi format
        * validasi database
        * proses
        * error handler
        */
        if (!is_null($content)) {
            if ($request->ajax()) {
                $this->validate($request, [
                    'tmp'        => 'required',
                    'nama'       => 'required',
                    'jenis'      => 'required',
                    'harga'      => 'required',
                    'waktu'      => 'required',
                    'kapasitas'  => 'required',
                    'lokasi'     => 'required',
                    'provinsi'   => 'required',
                    'kota'       => 'required',
                    'kecamatan'  => 'required',
                    'keterangan' => 'max:1000',
                ]);

                $TempatModel = TempatModel::find($request->tmp);

                $TempatModel->nama              = $request->nama;
                $TempatModel->jenis             = $request->jenis;
                $TempatModel->harga             = $request->harga;
                $TempatModel->lokasi            = $request->alamat;
                $TempatModel->waktu             = $request->waktu;
                $TempatModel->kapasitas         = $request->kapasitas;
                $TempatModel->lokasi            = $request->lokasi;
                $TempatModel->provinsi          = $request->provinsi;
                $TempatModel->kota              = $request->kota;
                $TempatModel->kecamatan         = $request->kecamatan;
                $TempatModel->keterangan        = $request->keterangan;
                $TempatModel->remember_token    = $request->_token;

                // give image uploded a name with extension

                if($request->hasFile('foto')){
                    $detail = TempatModel::find($request->tmp);
                    $filename = public_path('images/tempat/'.$detail->foto);
                    $filenamethumb = public_path('images/tempat/thumb/'.$detail->foto);

                    try {
                        File::delete([$filename, $filenamethumb]);
                    } catch (\Exception $exception){
                        return 'error delete file';
                    }
                    


                    $TempatModel->foto = date('Ymdhis').'.'.$request->foto->getClientOriginalExtension();
                    //upload image 
                    $request->foto->move(public_path('images/tempat/'),$TempatModel->foto);

                    //resize image
                    $pathFind = public_path('images/tempat/'.$TempatModel->foto);
                    $pathSave = public_path('images/tempat/thumb/'.$TempatModel->foto);
                    Image::make($pathFind)->resize(200, 200)->save($pathSave);
                }
                // save to databases

                try {
                    $TempatModel->save();
                } catch (\Exception $exception){
                    return Exception::error500($exception);
                    // return response()->json(["message" => $exception->getMessage()]);
                }
            }
        }
    }

    public function getmitra(){
        $data = mitraModel::limit(20)->get();
        return response()->json($data);
    }
}
    




