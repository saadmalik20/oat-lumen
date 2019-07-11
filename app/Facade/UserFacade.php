<?php

namespace App\Facade;
use App\Models\Users;

class UserFacade
{

	/*
		Return lowest note value, from a given list of notes
	*/
    public static function getList() {
        $usersList = Users::all();

        return $usersList->toArray();
    }




}
