<?php
/**
 * Created by PhpStorm.
 * User: NOAH
 * Date: 8/11/2015
 * Time: 8:17 AM
 */

namespace App\Domain\Repositories;

use App\Domain\Contract\Crudable;
use App\Domain\Contract\Paginable;
use App\Domain\Contract\Searchable;
use App\Domain\Entities\User;


/**
 * Class UserRepository
 *
 * @package App\Domain\Repositories
 */
class UserRepository extends AbstractRepository implements Crudable, Searchable, Paginable
{

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }


    /**
     * @param int $id
     * @param array $columns
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    /**
     * @param array $data
     *
     * @return user
     */
    public function create(array $data)
    {
        return parent::create([
                'name'     => e($data['name']),
                'email'    => e($data['email']),
                'password' => bcrypt($data['password']),
                'phone'    => e($data['phone']),
                'level'    => e($data['level']),
                'addres'   => e($data['addres']),
            ]
        );
    }

    /**
     * @param array $data
     * @param array $id
     *
     * @return mixed
     */
    public function update($id, array $data)
    {

        return parent::update($id, [
                'name'     => e($data['name']),
                'email'    => e($data['email']),
                'password' => e($data['password']),
                'phone'    => e($data['phone']),
                'level'    => e($data['level']),
                'addres'   => e($data['addres']),
            ]
        );

    }

    /**
     * @param $id
     *
     * @return mixed
     */

    /**
     * @param $id
     *
     * @return mixed
     */
    public function delete($id)
    {
        return parent::delete($id);
    }

    /**
     * @param $query
     *
     * @return mixed
     */
    public function search($query)
    {
        return parent::likeSearch('name', $query);
    }

    /**
     * @param int $limit
     * @param array $columns
     *
     * @return \Illuminate\Pagination\Paginator
     */
    public function getByPage($limit = 10, array $columns = ['*'])
    {
        return parent::getByPage($limit, $columns);
    }
}