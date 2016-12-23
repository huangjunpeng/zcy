<?php
namespace task;
use base\flowtasksprocess;
abstract class Node
{
    /**
     * @var flowtasksprocess
     */
    protected $_flowtasksprocess = null;

    /**
     * @var null
     */
    protected $_flowprocess = null;

    /**
     * @var FlowChart
     */
    protected $_flowchart = null;

    /**
     * Node constructor.
     * @param $_taskprocess
     * @param $_flowchart
     */
    public function __construct($_taskprocess,$_flowchart)
    {
        $this->_taskprocess = $_taskprocess;
        $this->_flowchart   = $_flowchart;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->_taskprocess->_from;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->_taskprocess->_status;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->_taskprocess->_category;
    }


    abstract public function send();

    abstract public function recv();

    abstract public function back();
}