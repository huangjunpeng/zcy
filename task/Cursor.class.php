<?php
namespace task;
class Cursor
{
    /**
     * @var Node
     */
    private $_begin = null;

    /**
     * @var Node
     */
    private $_end   = null;

    /**
     * @var FlowPath
     */
    private $_path  = null;

    /**
     * Cursor constructor.
     * @param Node $_begin
     */
    public function __construct(Node $_begin)
    {
        $this->_begin = $_begin;
        $this->_end   = $_begin;
    }


    public function move()
    {
        //初始化
        $_end = $this->_end;

        //创建连线
        $_line = new Line($_end,$this->_end);

        //记录路径
        $this->_path->setWork($_line);

        //继续往下走
        $this->_begin->send();
    }

    public function back()
    {
        $this->_end->back();
    }
}