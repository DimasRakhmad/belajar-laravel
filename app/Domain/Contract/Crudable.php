<?php
/**
 * Created by PhpStorm.
 * User: NOAH
 * Date: 8/11/2015
 * Time: 8:21 AM
 */

namespace App\Domain\Contract;


interface Crudable
{

    public function find($id,array $columns=[]);

    public function create(array $data);

    public function update($id, array $data);

    public  function delete($id);

}