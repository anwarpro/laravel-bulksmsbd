<?php
/**
 * Created by PhpStorm.
 * User: webnest-an
 * Date: 2/6/19
 * Time: 5:14 PM
 */

namespace Anwar\Bulksmsbd\Facades;


use Illuminate\Support\Facades\Facade;

class SmsBD extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'smsbd';
    }
}
