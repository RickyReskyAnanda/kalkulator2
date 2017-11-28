<?php

namespace App\Transformers;

use App\Model\AdminAuthModel;
use League\Fractal\TransformerAbstract;

/**
* 
*/
class AdminTransformer extends TransformerAbstract
{
	
	public function transform(AdminAuthModel $admin){
		return [
			'name' => $admin->name,
			'email' => $admin->email,
			'registered' => $admin->created_at,
		];
	}
}