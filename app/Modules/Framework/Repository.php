<?php
/**
 * Created by PhpStorm.
 * User: saurav
 * Date: 5/2/2017
 * Time: 12:01 PM
 */

namespace App\Modules\Framework;

interface Repository
{
    /**
     * Get count of row being shown perpage.
     *
     * @return int
     */

    public function perPage();

    /**
     * Get all data or search data by specific search query.
     *
     * @param mixed $searchQuery
     *
     * @return mixed
     */

    /**
     * Get model for operation.
     *
     * @return mixed
     */

    public function getModel();

    /**
     * All or search query
     * @param null $searchQuery
     * @return mixed
     */

    public function allOrSearch($searchQuery = null);

    /**
     * Get all data.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll();


    /**
     * Gets data for -datatable
     * @return mixed
     */
    public function getAllForDataTable();

    /**
     * FInd by data for -datatable
     * @param string $key
     * @param string $value
     * @param string $operator
     * @return mixed
     */
    public function findByDataTable($key, $value, $operator = '=');


    /**
     * Get all data with pagination
     * @return mixed
     */
    public function getWithPagination();
    /**
     * Search data by specify criteria.
     *
     * @param mixed $searchQuery
     *
     * @return mixed
     */
    public function search($searchQuery);

    /**
     * Find data by given an identifier.
     *
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findById($id);

    /**
     * Find data by specified column name and value.
     *
     * @param string $key
     * @param string $value
     * @param string $operator
     * @param boolean $paginate
     * @param integer $limit
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findBy($key, $value, $operator = '=',$paginate = true,$limit = null);
    /**
     * Find data by specified column name and value.
     *
     * @param string $key
     * @param string $value
     * @param string $operator
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findByFirst($key, $value, $operator = '=');

    /**
     * Create a new data.
     *
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $data);

    /**
     * Update old data
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id);

    /**
     * Delete a specified data by given data id.
     *
     * @param int $id
     *
     * @return bool
     */
    public function delete($id);


    /**
     * Hard deletes any item
     * @param $id
     * @return mixed
     */
    public function hardDelete($id);

    /**
     * @param $id
     * @return mixed
     */
    public function findBySlug($id,$status);

}
