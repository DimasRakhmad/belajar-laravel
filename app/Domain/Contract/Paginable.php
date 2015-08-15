<?php
/**
 * Created by PhpStorm.
 * User: NOAH
 * Date: 8/11/2015
 * Time: 8:22 AM
 */

namespace App\Domain\Contract;


/**
 * Interface Paginable
 *
 * @package App\Domain\Contract
 */
interface Paginable
{

    /**
     * @param int $limit
     *
     * @return mixed
     */
    public function getByPage($limit = 10);

}