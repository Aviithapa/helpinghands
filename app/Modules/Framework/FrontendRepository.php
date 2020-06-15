<?php
/**
 * Created by PhpStorm.
 * User: Saurav KC
 * Date: 5/29/2018
 * Time: 7:48 PM
 */
namespace App\Modules\Framework;

interface FrontendRepository
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
     * @param $id
     * @return mixed
     */
    public function findBySlug($id);

    /**
     * Find data by specified column name and value.
     *
     * @param string $key
     * @param string $value
     * @param string $operator
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findBy($key, $value, $operator = '=');



}
