<?php
namespace task;
class Line
{
    /**
     * @var Node
     */
    private $_from = null;

    /**
     * @var Node
     */
    private $_to = null;

    /**
     * Line constructor.
     * @param Node $_from
     * @param Node $_to
     */
    public function __construct(Node $_from,Node $_to)
    {
        $this->_from = $_from;
        $this->_to   = $_to;
    }

    /**
     * @return Node
     */
    public function getFrom()
    {
        return $this->_from;
    }

    /**
     * @return Node
     */
    public function getTo()
    {
        return $this->_to;
    }
}