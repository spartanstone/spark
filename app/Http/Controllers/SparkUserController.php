<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SparkUser;
use App\setGroup;
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
                  if(Input::has('lastname') ){
                    $sparkUsers->plainPassword = Input::get('lastname');
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

    public function deleteUser($username){

      SparkUser::where('username', $username)->delete();
      setGroup::where('username', $username)->delete();



    }
    public function updateUser($username){
      $name=null;
      $email=null;
      $lastname=null;

      $name=Input::get('name');
      $emai=Input::get('email');
      $lastname=Input::get('lastname');





/*
      $userUpdate= new SparkUser;
      $userUpdate->name = $namess      $userUpdate->email = $email;
      $userUpdate->plainPassword = $lastname;
      $userUpdate->save();

*/

    }

    public function updateGroup($username){
      $groupName = null;

      $groupName=Input::get('groupName');


      $groupUpdate = new setGroup;
      $groupUpdate->groupName = $groupName;
      $groupUpdate->save();


    }








    
}
