<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SparkUser;
use Illuminate\Support\Facades\Input;
use Log;

class SparkUserController extends Controller
{
        private function setFields($sparkUsers)
        {

        		//Log::debug(print_r(Input::all(),1));

                if(Input::has('username') ){
                    $sparkUsers->username = Input::get('username');
                }
                   if(Input::has('name') ){
                    $sparkUsers->name = Input::get('name');
                }
                  if(Input::has('plainPassword') ){
                    $sparkUsers->plainPassword = Input::get('plainPassword');
                }
                  if(Input::has('email') ){
                   $sparkUsers->email = Input::get('email');
                }

              return $sparkUsers;
        }

      public function store(Request $request)
    {
        $sparkUsers = new SparkUser;

        $sparkUsers = $this->setFields($sparkUsers);
        
        $sparkUsers->save();
    }

    
}
