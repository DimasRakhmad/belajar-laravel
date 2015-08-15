<?php

namespace App\Http\Controllers;

use App\Domain\Contract\Crudable;
use App\Domain\Contract\Paginable;
use App\Domain\Contract\Searchable;

use App\Http\Requests\Request;
use App\Http\Requests\UserFormRequest;

/**
 * Class ArticleController
 *
 * @package App\Http\Controllers\CMF\Backoffice
 */
class UserController extends Controller
{
    /**
     * @var Crudable
     */
    protected $crud;

    /**
     * @var Paginable
     */
    protected $paginate;

    /**
     * @var Searchable
     */
    protected $search;

    /**
     * Create ArticleController Instance
     *
     * @param Crudable   $crudable
     * @param Paginable  $paginable
     * @param Searchable $searchable
     */
    public function __construct(Crudable $crudable, Paginable $paginable, Searchable $searchable)
    {
        $this->crud = $crudable;
        $this->paginate = $paginable;
        $this->search = $searchable;
    }

    /**
     * Get the result by default page
     *
     * @return \Illuminate\Pagination\Paginator
     */
    public function index()
    {
        return $this->paginate->getByPage(10);
    }

    /**
     * Get the result by query and pagination
     *
     * @param Request $request
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function search(Request $request)
    {
        return $this->search->search($request->input('query'));
    }

    /**
     * Create a new entity
     *
     * @param ArticleRequest $request
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(UserFormRequest $request)
    {
        return $this->crud->create($request->all());
    }

    /**
     * Find a single entity
     *
     * @param $id
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function show($id)
    {
        return $this->crud->find($id);
    }

    /**
     * Update an existing entity
     *
     * @param                    $id
     * @param ArticleEditRequest $request
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($id, UserFormRequest $request)
    {
        return $this->crud->update($id, $request->all());
    }

    /**
     * Delete an existing entity
     *
     * @param $id
     *
     * @return bool
     */
    public function destroy($id)
    {
        return $this->crud->delete($id);
    }

}
