<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class VenueModel extends Authenticatable 
{
    use Notifiable;
    
    protected $table = 'venue';
    protected $primaryKey = 'id_venue';

    protected $fillable=[
    	'name,address,photo,district,city,province,information,contact_number,contact_email,api_token,cooperate'
    ];
}
