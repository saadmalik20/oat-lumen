<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response as HttpResponse;
use Illuminate\Http\Request;
use App\Facade\UserFacade;

class UsersController extends Controller
{

    /**
     * @api {post} /api/users List User
     * @apiVersion 1.0.0
     * @apiName List
     * @apiGroup User
     * @apiHeader {String} Content-Type application/json.
     *
     * 
     *
     * @apiErrorExample Error-Response: 
     *     HTTP/1.1 400 Bad Request
     *   ["InvalidArgumentException"]
     *
     * @apiErrorExample Error-Response: 
     *     HTTP/1.1 404 Not Found
     *   ["NoteUnavailableException"]
     *
     * @apiSuccessExample Success-Response:
     *     HTTP/1.1 200 OK
     *   [
     *   ] 
     *
     */
    public function list(Request $request){
        $usersList = UserFacade::getList();
        print_r(json_encode($usersList));
    }

}
