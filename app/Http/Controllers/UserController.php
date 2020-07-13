<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function store(Request $request, User $userModel){


        $requestData = json_decode($request->getContent(), true);
        dd($requestData);

/*
        dd($request);

        $customAttributes = [
            'email' => 'correo eletronico',
            'fullname' => 'nombre Completo',
            'age' => 'edad',
            'phone' => 'celular',
        ];

        $messages = array(
            'numeric' => 'Cmapo :attribute debe ser un numerico.',
            'required' => 'Campo :attribute es requerido.',
            'min' => 'Campo :attribute debe contener :min digitos minimo.',
            'email' => 'El campo :attribute  debe ser un correo valido.',
            'unique' => 'El campo :attribute ya esta en uso, ingresa un correo con otro nombre.',
        );

        $validate = Validator::make($request->all(), [
            "fullname" => "required",
            "age" => "required|numeric|max:3",
            "phone" => "required|numeric|max:12",
            "nickname" => "required|unique:users",
            "email" => "required|email"
        ], $messages, $customAttributes);

        if ($validate->fails())
            return response()->json($validate->errors());

        $userModel = new User($request->all());
        $userModel->save();

        return response()->json(["status" => "success", "message" => "registro guardado correctamente"]);
*/
    }

}
