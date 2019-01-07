<?php 
/**
 * @author Mustafa Omran <promustafaomran@hotmail.com>
 * 
 */

namespace App\Repositories;

interface RepositoryInterface
{
    /**
     * list
     */
    public function all();

    /**
     * 
     * @param array $data
     */
    public function create(array $data);

    /**
     * update
     * 
     * @param array $data
     * @param int $id
     */
    public function update(array $data, int $id);

    
    /**
     * delete
     * 
     * @param int $id
     */
    public function delete(int $id);

    /**
     * show
     * @param int $id
     */
    public function show(int $id);
}