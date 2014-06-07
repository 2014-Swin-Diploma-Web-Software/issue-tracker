<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Issue extends Eloquent  {
	
	protected $fillable = array('issue_title', 'issue_desc', 'status_id','priority_id');
		
		public function userissues()
		{
			return $this->belongToMany('Users','issue_user','issue_id','user_id');
		}
		
	public function projectissues()
		{
			return $this->belongTo('projects');
		}


}