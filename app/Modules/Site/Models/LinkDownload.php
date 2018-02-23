<?php

namespace App\Modules\Site\Models;

use Illuminate\Database\Eloquent\Model;

class LinkDownload extends Model {

   protected $table= "link_download";
 
	public function post()
   	{
   return $this->belongsTo('App\Modules\Admin\Models\Post','post_group_id','group_id');
	}

}
