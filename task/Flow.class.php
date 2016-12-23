<?php
namespace task;
use base\form;
class Flow
{
    /**
     * @var array
     */
    private $_map = array();

    /**
     * @var form
     */
    private $_form = null;

    /**
     * @var FlowProcess[]
     */
    private $_process = array();

    /**
     * @var string
     */
    private $_error = '';

    /**
     * TaskFlow constructor.
     * @param $flowid
     */
    public function __construct($flowid)
    {
        $this->_map = D(ZCY_FLOW_TYPE_TABLE)->where(array('flowid' => $flowid))->find();
        $map = D(ZCY_FLOW_FORM_TYPE_TABLE)->where(array('formid' => $this->formid))->find();
        $this->_form = new form($map);
        $list = D(ZCY_FLOW_PROCESS_TABLE)->where(array('flowid' => $flowid))->select();
        foreach ($list as $map) {
            $this->_process[$map['from']] = new flowprocess($map);
        }
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