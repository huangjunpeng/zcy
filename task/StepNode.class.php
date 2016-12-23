<?php
namespace task;
class StepNode extends Node
{
    /**
     * @var Line[]
     */
    private $_prevline = array();

    /**
     * @var Line[]
     */
    private $_nextline = array();

    /**
     * StepNode constructor.
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