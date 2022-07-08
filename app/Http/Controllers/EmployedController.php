<?php

namespace App\Http\Controllers;

use App\Http\Services\EmployedService;
use Illuminate\Http\Request;

class EmployedController extends Controller
{

    public function getEmpleados()
    {
        try {

            $employed = new EmployedService();
            $res_employed = $employed->geEmployed();
            return $res_employed;
        } catch (\Exception $ex) {
            return response()->json(['status' => $ex->getCode(), 'message' => $ex->getMessage()], 422);
        }
    }

    public function getEmpleadoFilter(Request $request)
    {
        try {

            $employed = new EmployedService();
            $res_employed = $employed->getFilterEmployed($request->id);

            return $res_employed;
        } catch (\Exception $ex) {
            return response()->json(['status' => $ex->getCode(), 'message' => $ex->getMessage()], 422);
        }
    }
}
