<?php

class AuthController extends BaseController {

	public function login()
	{
		return View::make('auth.login');
	}
        
	public function auth(){
		if(Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))){
                        
			switch(Auth::user()->role->name){
				case Role::TEACHER_ROLE:
					return Redirect::route('tutor.students.index');	
					break;
				case Role::STUDENT_ROLE:
					return Redirect::route('board');
					break;
			}
		}else{
			
			return Redirect::route('login')->with('error','Usuario y/o contraseña invalidos');
		}
	
            
        }

	public function logout()
	{
		Auth::logout();
		return Redirect::route('home');
	}

}
