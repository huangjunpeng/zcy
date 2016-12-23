<?php
namespace task;
class FlowPath
{
    /**
     * @var Line[]
     */
    private $_work = array();

    /**
     * @var Line[]
     */
    private $_ignore = array();

    /**
     * @param Line $_line
     */
    public function setWork($_line)
    {
        $this->_work[] = $_line;
    }

    /**
     * @param Line $_line
     */
    public function setIgnore($_line)
    {
        $this->_ignore[] = $_line;
    }
}