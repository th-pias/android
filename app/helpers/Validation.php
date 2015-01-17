<?php
class Validation {
    protected static $rules;
    public static function signup($inputs){
        static::$rules = array(
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:5'],
            'username' => ['required', 'username', 'unique:users']
        );
        $validation = Validator::make($inputs, static::$rules);
        return $validation;
    }
}