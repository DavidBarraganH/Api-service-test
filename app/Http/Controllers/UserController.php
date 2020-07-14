<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function store(Request $request, User $userModel){

        $customAttributes = [
            'email' => 'correo eletronico',
            'fullname' => 'nombre Completo',
            'age' => 'edad',
            'phone' => 'celular',
        ];

        $messages = array(
            'numeric' => 'Cmapo :attribute debe ser un numerico.',
            'required' => 'Campo :attribute es requerido.',
            'email' => 'El campo :attribute  debe ser un correo valido.',
            'unique' => 'El campo :attribute ya esta en uso, ingresa un correo con otro nombre.',
            'between' => 'Lo siento, su edad no esta entre 18 y 100.'
        );

        $validate = Validator::make($request->all(), [
            "fullname" => "required",
            "age" => "required|numeric|between:18,100",
            "phone" => "required|numeric",
            "nickname" => "required|unique:users",
            "email" => "required|email"
        ], $messages, $customAttributes);

        if ($validate->fails())
            return response()->json([
                "status"=>"error",
                "data"=> $validate->errors()
            ]);

        $userModel = new User($request->all());
        $userModel->save();

        return response()->json(["status" => "success", "data" => "Registro guardado correctamente."]);
    }

}
