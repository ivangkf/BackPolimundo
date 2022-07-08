<?php

namespace App\Http\Services;


use App\Models\Usuarios;

class UserService
{

    function getUsuarios()
    {
        try {
            $response = Usuarios::with('empleados')
                ->get();
            return (count($response) > 0) ? json_decode(json_encode($response), true) : [];
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    function getUsuariosFilterEmployed($id)
    {
        try {
            $response = Usuarios::with('empleados')
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
