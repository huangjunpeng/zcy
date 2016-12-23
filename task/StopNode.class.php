<?php
namespace task;
class StopNode extends Node
{
    /**
     * @var Line
     */
    private $_prevline = array();

    /**
     * StopNode constructor.
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