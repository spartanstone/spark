<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\groupCreate;
use App\groupName;
use Illuminate\Support\Facades\Input;
use Log;

class groupCreateController extends Controller
{

    public function setPropData(){

    	
    	$groupName=null;

	   if(Input::has('groupName') ){
            $groupName = Input::get('groupName');


            $group_1 = new groupCreate;
            $group_1->groupName = $groupName;
            $group_1->name = 'sharedRoster.displayName';
            $group_1->propValue = $groupName;
            $group_1->save();

            $group_2 = new groupCreate;
            $group_2->groupName = $groupName;
            $group_2->name = 'sharedRoster.grouplist';
            $group_2->propValue = ' ';
            $group_2->save();


            $group_3 = new groupCreate;
            $group_3->groupName = $groupName;
            $group_3->name = 'sharedRoster.showInRoster';
            $group_3->propValue = 'everybody';
            $group_3->save();


            $group = new groupName ;
            $group->groupName = $groupName;
            $group->save();




        }
        


    }

    public function removeGroup($removegroup){
        groupCreate::where('groupName', $removegroup)->delete();

    }
}
