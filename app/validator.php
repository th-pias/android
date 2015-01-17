<?php

Validator::extend('username', function($attribute, $value)
{
    return preg_match('/^[\w\d\._]+$/u', $value);
});