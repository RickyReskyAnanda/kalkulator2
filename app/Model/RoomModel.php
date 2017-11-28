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

    public function venue(){
        return $this->belongsTo('App\Model\VenueModel','id_venue');//hasOne('App\Model\VenueModel','id_venue');
    }

    public function roomPhoto(){
        return $this->hasMany('App\Model\RoomPhotoModel', 'id_room')->where('status','show');
    }

    public function roomFacilityFree(){
        return $this->hasMany('App\Model\RoomFacilityModel', 'id_room')->where('free','1');
    }

    public function roomFacilityPay(){
        return $this->hasMany('App\Model\RoomFacilityModel', 'id_room')->where('free','0');
    }

    public function roomEvent(){
        return $this->hasMany('App\Model\RelationEventRoomModel', 'id_room');
    }

    public function roomType(){
        return $this->belongsTo('App\Model\RoomTypeModel','id_room_type');//hasOne('App\Model\VenueModel','id_venue');
    }

    public function roomOperational(){
        return $this->hasMany('App\Model\RoomOperationalModel', 'id_room');
    }

}
