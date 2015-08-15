<?php
/**
 * Created by PhpStorm.
 * User: NOAH
 * Date: 8/11/2015
 * Time: 8:22 AM
 */

namespace App\Domain\Contract;


interface Searchable
{

    public function search($query);

}