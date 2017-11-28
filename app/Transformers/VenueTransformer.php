<?php

namespace App\Transformers;

use App\Model\VenueModel;
use League\Fractal\TransformerAbstract;

/**
* 
*/
class VenueTransformer extends TransformerAbstract
{
	
	public function transform(VenueModel $venue){
		return [
			'id' 		=> $venue->id_venue,
			'nama' 			=> $venue->name,
			'foto'	 		=> $venue->photo,
			'alamat' 		=> $venue->address,
			'kecamatan' 	=> $venue->district,
			'kabupaten'		=> $venue->city,
			'provinsi'		=> $venue->province,
			'informasi'		=> $venue->information,
			'nomor'			=> $venue->contact_number,
			'email'			=> $venue->contact_email,
			'kerjasama'		=> $venue->cooperate,
			'terdaftar' 	=> $venue->created_at->diffForHumans(),
		];
	}
}