<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    protected $table = 'room';
    protected $primaryKey = 'id_room';

    // protected $fillable=[
    // 	'nama,email,kontak,lokasi,provinsi,kota,kecamatan,keterangan,foto'
    // ];

    public function ruangan(){
        return $this->hasMany('App\Model\RoomModel', 'id_venue','id_venue');
    }

    public function venue(){
        return $this->belongsTo('App\Model\VenueModel','id_venue');//hasOne('App\Model\VenueModel','id_venue');
    }

    public function foto_ruangan(){
        return $this->hasMany('App\Model\RoomPhotoModel', 'id_room')->where('status','show');
    }

    public function fasilitas(){
        return $this->hasMany('App\Model\RoomFacilityModel', 'id_room');
    }

    public function paket(){
        return $this->hasMany('App\Model\PackageModel', 'id_room','id_room');
    }

    // public function roomFacilityFree(){
    //     return $this->hasMany('App\Model\RoomFacilityModel', 'id_room')->where('free','1');
    // }

    // public function roomFacilityPay(){
    //     return $this->hasMany('App\Model\RoomFacilityModel', 'id_room')->where('free','0');
    // }

    public function roomEvent(){
        return $this->hasMany('App\Model\RelationEventRoomModel', 'id_room');
    }

    public function roomType(){
        return $this->belongsTo('App\Model\RoomTypeModel','id_room_type');//hasOne('App\Model\VenueModel','id_venue');
    }

    public function roomOperational(){
        return $this->hasMany('App\Model\RoomOperationalModel', 'id_room');
    }

    public function kecamatan(){
        return $this->hasOne('App\Model\DistrictModel','id','district');
    }
    public function kota(){
        return $this->hasOne('App\Model\RegencyModel','id','city');
    }

    public function komentar(){
        return $this->hasMany('App\Model\VenueCommentModel','id_venue','id_venue');
    }

}
