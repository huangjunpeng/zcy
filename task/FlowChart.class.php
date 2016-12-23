<?php
namespace task;
use flow\flowconfig;

class FlowChart
{
    /**
     * @var Node
     */
    private $_start = null;

    /**
     * @var Node
     */
    private $_stop = null;

    /**
     * @var Cursor
     */
    private $_cursor = null;

    /**
     * @var Node[]
     */
    private $_node = null;

    /**
     * @var Line[]
     */
    private $_line = null;

    /**
     * @var Service
     */
    private $_service = null;

    /**
     * FlowChart constructor.
     * @param $_service
     */
    public function __construct($_service)
    {
        $this->_service = $_service;
        $this->_cursor  = new Cursor($this->_start);
    }

    /**
     * @param $_from
     * @return Line[]
     */
    public function getLineByFrom($_from)
    {
        $lineArray = array();
        foreach ($this->_line as $_line) {
            if ($_line->getFrom() == $_from) {
                $lineArray[] = $_line;
             }
        }
        return $lineArray;
    }

    /**
     * @param $_to
     * @return Line[]
     */
    public function getLineByTo($_to)
    {
        $lineArray = array();
        foreach ($this->_line as $_line) {
            if ($_line->getTo() == $_to) {
                $lineArray[] = $_line;
            }
        }
        return $lineArray;
    }

    /**
     * @param $_from
     * @return null|Node
     */
    public function getNodeByFrom($_from)
    {
        foreach ($this->_node as $_node) {
            if ($_node->getFrom() == $_from) {
                return $_node;
            }
        }
        return null;
    }

    public function init()
    {
        $list = D(ZCY_FLOW_TASKS_PROCESS_TABLE)->where(array('runid'=>$this->_service->runid))->select();

        foreach ($list as $map) {
            switch ($map['category'])
            {
                case flowconfig::FLOW_START_NODE:
                    $this->_start = new StartNode(new TaskProcess($map),$this);
                    break;
                case flowconfig::FLOW_STOP_NODE:
                    $this->_stop = new StopNode(new TaskProcess($map),$this);
                    break;
                case flowconfig::FLOW_STEP_NODE:
                    $this->_node[$map['from']] = new StepNode(new TaskProcess($map),$this);
                    break;
                case flowconfig::FLOW_CONDITION_NODE:
                    $this->_node[$map['from']] = new ConditionNode(new TaskProcess($map),$this);
                    break;
            }
        }
    }
}