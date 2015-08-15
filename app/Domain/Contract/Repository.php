<?php
/**
 * Created by PhpStorm.
 * User: NOAH
 * Date: 8/11/2015
 * Time: 9:48 AM
 */

namespace App\Domain\Contract;


interface Repository
{

    public function all();

    public function getManyBy($key, $value);

    public function getFirstBy($key, $value);

    public function getWhereIn($key, array $array);

    public function instance(array $attributes = []);

}