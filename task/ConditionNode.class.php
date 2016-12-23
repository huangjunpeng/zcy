<?php
namespace task;
class ConditionNode extends Node
{
    /**
     * 上一步
     * @var Line[]
     */
    private $_prevline = array();

    /**
     * @var Line
     */
    private $_trueline = null;

    /**
     * @var Line
     */
    private $_flaseline = null;

    /**
     * ConditionNode constructor.
     * @param $_taskprocess
     * @param $_flowchart
     */
    public function __construct($_taskprocess, $_flowchart)
    {
        parent::__construct($_taskprocess, $_flowchart);
    }

    public function send()
    {
        // TODO: Implement send() method.
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