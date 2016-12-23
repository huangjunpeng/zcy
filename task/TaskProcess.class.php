<?php
namespace task;
class TaskProcess
{
    /**
     * @var array
     */
    private $_map = array();

    /**
     * @var string
     */
    private $_error = '';

    /**
     * TaskProcess constructor.
     * @param $_map
     */
    public function __construct($_map)
    {
        $this->_map = $_map;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->_map[$name];
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->_error;
    }
}