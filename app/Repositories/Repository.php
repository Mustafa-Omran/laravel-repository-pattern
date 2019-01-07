<?php
/**
 * @author Mustafa Omran <promustafaomran@hotmail.com>
 * 
 */

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repository implements RepositoryInterface {

    /**
     *
     * @var Illuminate\Database\Eloquent\Model 
     */
    protected $model;

    /**
     * 
     * @param Model $model
     */
    public function __construct(Model $model) {
        $this->model = $model;
    }

    /**
     * list
     * 
     * 
     * @return mixed
     */
    public function all() {
        return $this->model->all();
    }

    /**
     * create 
     * 
     * 
     * @param array $data
     * @return mixed
     */
    public function create(array $data) {
        return $this->model->create($data);
    }

    /**
     * update 
     * 
     * 
     * @param array $data
     * @param int $id
     * @return mixed
     */
    public function update(array $data, int $id) {
        $record = $this->find($id);
        return $record->update($data);
    }

    /**
     * delete 
     * 
     * 
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool {
        return $this->model->destroy($id);
    }

    /**
     * show 
     * 
     * 
     * @param int $id
     * @return mixed
     */
    public function show(int $id) {
        return $this->model->findOrFail($id);
    }

    /**
     * get 
     * 
     * @return Illuminate\Database\Eloquent\Model
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * set
     * 
     * 
     * @param Illuminate\Database\Eloquent\Model $model
     * @return $this
     */
    public function setModel($model) {
        $this->model = $model;
        return $this;
    }


    /**
     * model with relation or more
     * 
     * 
     * @param array $relations
     * @return mixed
     */
    public function withRelations(array $relations) {
        return $this->model->with($relations);
    }

}
