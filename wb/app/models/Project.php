<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Project extends Eloquent  {
	
	protected $fillable = array('title');
		
		public function users() {
			
			return $this->belongsToMany('User','project_user','project_id','user_id');
		}
		
		
	   public function issuesprojects(){
	   	
		return $this->hasMany('Issue');
		
	   }
	   
	   
	   
}
