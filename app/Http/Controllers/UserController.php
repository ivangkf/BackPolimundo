<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getUsuarios()
    {
        try {

            $users = new UserService();
            $res_users = $users->getUsuarios();
            return $res_users;
        } catch (\Exception $ex) {
            return response()->json(['status' => $ex->getCode(), 'message' => $ex->getMessage()], 422);
        }
    }

    public function getUsuariosFilter(Request $request)
    {
        try {

            $users = new UserService();
            $res_users = $users->getUsuariosFilterEmployed($request->id);

            return $res_users;
        } catch (\Exception $ex) {
            return response()->json(['status' => $ex->getCode(), 'message' => $ex->getMessage()], 422);
        }
    }
}
