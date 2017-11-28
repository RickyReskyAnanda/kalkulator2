<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RelationEventRoomModel extends Model
{
   	protected $table = "relation_event_room";
   	protected $primaryKey = "id_relation_er";

   	public function event(){
        return $this->belongsTo('App\Model\EventModel','id_event');
    }
}
