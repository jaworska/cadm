<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class Offer extends Model
{
    /**
     * Get a validator for an incoming registration request.
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function getValidatorAttribute()
    {
        return Validator::make($this -> toArray(), [
            'title' => ['required', 'string'],
            'location' => ['required', 'numeric'],
            'range' => ['required', 'string'],
            'offer' => ['required', 'string'],
            'requirements' => ['required', 'string'],
            'start_date' => ['required']
        ]);
    }
    public function cvs(){
        return $this->hasMany('App\CV');
    }
}
