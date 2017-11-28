<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\VenueModel;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
    	$mitra = VenueModel::find(688)->toArray();

	    Mail::send('mail.info', ['mitra' => $mitra], function ($m) use ($mitra) {
			$m->from('info@ceklokasi.id','brillian');
			$m->to('60200114019@uin-alauddin.ac.id','brillian')->subject('Your Reminder!');
		});
    }
}
