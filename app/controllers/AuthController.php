<?php

class AuthController extends BaseController {

	public function login()
	{
		return View::make('auth.login');
	}

	public function auth(){
		if(Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))){

			switch(Auth::user()->role->name){
				case 'Admin':
					return Redirect::to('/admin/photos');	
					break;
				case 'Partner':
					return Redirect::to('/photos');
					break;
				case 'Partner Plus':
					return Redirect::to('/photos');
					break;
				case 'Customer':
					return Redirect::route('customerPanel');
					break;
			}
		}else{
			return Redirect::route('login')->with('error','Usuario y/o contraseña invalidos');
		}
	}

}
