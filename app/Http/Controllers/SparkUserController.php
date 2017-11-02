<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SparkUser;
use App\setGroup;
use Illuminate\Support\Facades\Input;
use Log;

class SparkUserController extends Controller
{

  /*public function addUser(){
    $username=null;
    $name=null;
    $plainPassword=null;
    $email=null;
    $groupName=null;



  }*/

        private function setFields($sparkUsers)
        {

        		//Log::debug(print_r(Input::all(),1));

                if(Input::has('username') ){
                    $sparkUsers->username = Input::get('username');
                }
                   if(Input::has('name') ){
                    $sparkUsers->name = Input::get('name');
                }
                  if(Input::has('lastname') ){
                    $sparkUsers->plainPassword = Input::get('lastname');
                }
                  if(Input::has('email') ){
                   $sparkUsers->email = Input::get('email');
                }

              return $sparkUsers;
        }

     /*   private function setGroup($setGroup){

                if(Input::has('groupName') ){
                    $setGroup->groupName = Input::get('groupName');
                }

                return$setGroup;

        }*/

    public function store(Request $request)
    {
        $sparkUsers = new SparkUser;

        $sparkUsers = $this->setFields($sparkUsers);
        
        $sparkUsers->save();

        $groupName=null;
        $groupUserName=null;

        if(Input::has('groupName') ){
          $groupName = Input::get('groupName');
        

          if(Input::has('username') ){
            $groupUserName = Input::get('username');
                             
            

          $group= new setGroup;
          $group->groupName= $groupName;
          $group->username = $groupUserName;
          $group->administrator = '0';
          $group->save();
        }
      }
      
    }

    
}
