<?php

namespace swede2k\Hello;

class Facade extends Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hello';
    }
}