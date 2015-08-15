<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class UserFormRequest extends Request
{

    protected $attrs = [
        'name'     => 'Name',
        'email'    => 'Email',
        'password' => 'Password',
        'phone' => 'phone',
        'level'    => 'Level',
        'addres'   => 'Addres',

    ];


    public function rules()
    {
        return [
            'name'     => 'required|max:100|min:3',
            'email'    => 'required|email|max:100|min:4',
            'password' => 'required|max:100',
            'phone'=> 'required|numeric',
            'level'    => 'required|max:10',
            'addres'   => 'required|max:100'
            //
        ];
    }

    public function validator($validator)
    {
        return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
    }

    protected function formatErrors(Validator $validator)
    {
        $message = $validator->errors();

        return [
            'success'    => false,
            'validation' => [
                'name'     => $message->first('name'),
                'email'    => $message->first('email'),
                'password' => $message->first('password'),
                'level'    => $message->first('level'),
                'phone'    => $message->first('phone'),
                'addres'   => $message->first('addres'),

            ]
        ];
    }
}
