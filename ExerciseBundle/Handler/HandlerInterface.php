<?php

namespace ExerciseBundle\Handler;

use FOS\RestBundle\View\View;

/**
 * Interface HandlerInterface
 *
 * Must be implemented in the handlers.
 *
 * @package ExerciseBundle\Handler
 */
interface HandlerInterface
{
    /**
     * Get a resource
     *
     * @param int $id
     * @return Object
     */
    public function get($id);

    /**
     * Get a collection of resources
     *
     * @param int $limit
     * @param int $offset
     * @return array
     */
    public function get($limit, $offset);

    /**
     * Register a resource
     *
     * @param $resource
     * @return mixed
     */
    public function post($resource);
}
