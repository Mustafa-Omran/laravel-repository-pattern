<?php

namespace App\Http\Controllers;

use App\Task;
use App\Repositories\Repository;
use Illuminate\Http\Request;

class TaskController extends Controller {

    /**
     *
     * @var \App\Task 
     */
    protected $model;

    /**
     * 
     * @param Task $task
     */
    public function __construct(Task $task) {
        $this->model = new Repository($task);
    }

    public function index() {
        return $this->model->all();
    }

    /**
     * store new model
     * 
     * 
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request) {
        $this->validate($request, [
            'body' => 'required|max:500'
        ]);

        // create record and pass in only fields that are fillable
        return $this->model->create($request->only($this->model->getModel()->fillable));
    }

    /**
     * show task 
     * 
     * 
     * @param int $id
     * @return mixed
     */
    public function show(int $id) {
        return $this->model->show($id);
    }

    /**
     * update task
     * 
     * 
     * @param Request $request
     * @param int $id
     * @return mixed
     */
    public function update(Request $request, int $id) {
        $this->model->update($request->only($this->model->getModel()->fillable), $id);

        return $this->model->find($id);
    }

    
    /**
     * delete task
     * 
     * 
     * @param int $id
     * @return mixed
     */
    public function destroy(int $id) {
        return $this->model->delete($id);
    }

}
