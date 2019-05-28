<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CV extends Model
{
    /**
     * Get a validator for an incoming registration request.
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    static function validator(Request $request)
    {
        return Validator::make($request  -> all(), [
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'email'],
            'term_1' => ['required', 'string'],
            'term_2' => ['required', 'string'],
            'term_3' => ['required', 'string'],
            'file' => ['required','max:2048','mimes:pdf,doc']
        ]);
    }
}
