<?php

namespace App\Controllers;

use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Task\Task;

/**
 * @Controller("task")
 */
class TaskController
{
    /**
     * Deliver co task
     *
     * @return array
     */
    public function co()
    {
        $result  = Task::deliver('sync', 'deliverCo', ['p', 'p2'], Task::TYPE_CO);

        return [$result];
    }

    /**
     * Deliver async task
     *
     * @return array
     */
    public function async()
    {
        $result  = Task::deliver('sync', 'deliverAsync', ['p', 'p2'], Task::TYPE_ASYNC);

        return [$result];
    }

    /**
     * Cache task
     *
     * @return array
     */
    public function cache()
    {
        $result  = Task::deliver('sync', 'cache', [], Task::TYPE_CO);

        return [$result];
    }

    /**
     * Mysql task
     *
     * @return array
     */
    public function mysql()
    {
        $result  = Task::deliver('sync', 'mysql', [], Task::TYPE_CO);

        return [$result];
    }

    /**
     * Http task
     *
     * @return array
     */
    public function http()
    {
        $result  = Task::deliver('sync', 'http', [], Task::TYPE_CO);

        return [$result];
    }

    /**
     * Rpc task
     *
     * @return array
     */
    public function rpc()
    {
        $result  = Task::deliver('sync', 'rpc', [], Task::TYPE_CO);

        return [$result];
    }

    /**
     * Rpc task
     *
     * @return array
     */
    public function rpc2()
    {
        $result  = Task::deliver('sync', 'rpc2', [], Task::TYPE_CO);

        return [$result];
    }
}