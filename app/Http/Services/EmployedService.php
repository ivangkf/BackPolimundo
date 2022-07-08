<?php

namespace App\Http\Services;


use App\Models\Empleados;
use Illuminate\Support\Facades\DB;

class EmployedService
{

    function geEmployed()
    {
        try {
            $response = Empleados::with('usuarios')
                ->get();
            return (count($response) > 0) ? json_decode(json_encode($response), true) : [];
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    function getFilterEmployed($id)
    {
        try {
            $response = Empleados::with('usuarios')
                ->where([
                    ["id", $id]
                ])
                ->get();
            return (count($response) > 0) ? json_decode(json_encode($response), true) : [];
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }
}
