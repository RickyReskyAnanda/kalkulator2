<?php

namespace App\Transformers;

use App\Model\RoomModel;
use League\Fractal\TransformerAbstract;

/**
* 
*/
class RoomTransformer extends TransformerAbstract
{
	
	public function transform(RoomModel $room){
		return [
			'id' 					=> (int) $room->id_room,
			'venueid' 				=> $room->id_venue,
			'nama'	 				=> $room->name,
			'kode_ruangan'			=> $room->room_code,
			'kapasitas' 			=> $room->capacity,
			'email'					=> $room->contact_email,
			'nomor'					=> $room->contact_number,
			'harga_seharian'		=> $room->fullday_price,
			'harga_setengah_hari' 	=> $room->halfday_price,
			'harga_sehari_penuh'	=> $room->wholeday_price,
			'perhari'				=> $room->is_daily,
			'perharian'				=> $room->is_fullday,
			'persetengah_hari'		=> $room->is_halfday,
			'perjam'				=> $room->is_hourly,
			'perbulan'				=> $room->is_monthly,
			'sehari_penuh'			=> $room->is_wholeday,
			'makanan_dibolehkan'	=> $room->is_food_allowed,
			'harga_asli'			=> $room->main_price,
			'foto'					=> $room->image,
			'panjang_ruangan'		=> $room->room_long,
			'lebar_ruangan'			=> $room->room_width,
			'jenis_ruangan_id'		=> $room->room_type_id,
			'tinggi_ruangan'		=> $room->room_ceiling,
			'ada_model'				=> $room->is_room_style,
			'ada_paket'				=> $room->is_package,
			'kerjasama'				=> $room->is_cooperate,
			'peraturan'				=> $room->room_regulation,
			'akses_ruangan'			=> $room->room_access,
			'deskripsi'				=> $room->description,
		];
	}
}