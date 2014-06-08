<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Issue extends Eloquent  {
	
	protected $fillable = array('issue_title', 'issue_desc', 'status_id','priority_id','related_project');
		
		public function userIssues()
		{
			return $this->belongToMany('User','issue_user','issue_id','user_id');
		}
		
	public function projectIssues()
		{
			return $this->belongTo('Project');
		}


}