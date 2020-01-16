<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        helper(['url', 'form']);
		return view('home/form');
	}
    public function insert()
    {
        return view('home/insert_message');
    }

	//--------------------------------------------------------------------

}
