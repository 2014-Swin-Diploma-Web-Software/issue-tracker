<?php

class PagesController extends BaseController {

	public function index()
	{
		return View::make('pages.index');
	}

	public function about()
	{
		return View::make('pages.about');
	}

	public function gallery()
	{
		return View::make('pages.gallery');
	}

	public function dashboard()
	{
		return View::make('pages.dashboard');
	}

	public function login()
	{
		return View::make('pages.login');
	}

	public function registe()
	{
		return View::make('pages.registe');
	}

	public function teastgood()
	{
		return View::make('pages.teastgood');
	}
}