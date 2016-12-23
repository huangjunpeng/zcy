<?php
namespace task;
class Service
{
    /**
     * @var array
     */
    private $_map = array();

    /**
     * @var string
     */
    private $_error = '';

    /**
     * @var FlowChart
     */
    private $_flowchart = null;

    /**
     * @var Flow
     */
    private $_flow = null;

    /**
     * Service constructor.
     * @param $runid
     */
    public function __construct($runid)
    {
        $this->_map         = D(ZCY_FLOW_TASKS_TABLE)->where(array('runid'=>$runid))->find();
        $this->_flow        = new Flow($this->flowid);
        $this->_flowchart   = new FlowChart($this);
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

    /**
     * @return FlowChart
     */
    public function getFlowchart()
    {
        return $this->_flowchart;
    }

    /**
     * @return Flow
     */
    public function getFlow()
    {
        return $this->_flow;
    }
}