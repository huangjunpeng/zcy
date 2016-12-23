<?php
namespace task;
use flow\flowconfig;

class StartNode extends Node
{
    /**
     * @var Line[]
     */
    private $_nextline = array();

    /**
     * StartNode constructor.
     * @param $_taskprocess
     * @param $_flowchart
     */
    public function __construct($_taskprocess, $_flowchart)
    {
        parent::__construct($_taskprocess, $_flowchart);
    }

    /**
     * @param Node|null $_node
     * @throws \Exception
     */
    public function init(Node $_node = null)
    {
        $_node = $this->_flowchart->getNodeByFrom(flowconfig::FLOW_START_NODE);
        if ($_node) {
            throw new \Exception('获取步骤失败');
        }
    }

    /**
     * 执行下一步
     * @return boolean
     */
    public function send()
    {
        //执行到下一步骤
        foreach ($this->_nextline as $_line) {
            $_node = $_line->getTo();
            if (!$_node->recv()){
                return false;
            }
        }
        return true;
    }

    public function recv()
    {
        // TODO: Implement recv() method.
    }

    public function back()
    {
        // TODO: Implement back() method.
    }
}