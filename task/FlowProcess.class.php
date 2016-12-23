<?php
namespace task;
class FlowProcess
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
     * FlowProcess constructor.
     * @param $_map
     */
    public function __construct($_map)
    {
        $this->_map = $_map;
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getFlowid()
    {
        return $this->flowid;
    }

    /**
     * @return int
     */
    public function getProcessid()
    {
        return $this->processid;
    }

    /**
     * @return string
     */
    public function getPrev()
    {
        return $this->prev;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getProcesswrite()
    {
        return $this->processwrite;
    }

    /**
     * @return string
     */
    public function getProcessto()
    {
        return $this->processto;
    }

    /**
     * @return string
     */
    public function getHiddenitem()
    {
        return $this->hiddenitem;
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @return string
     */
    public function getDeptid()
    {
        return $this->deptid;
    }

    /**
     * @return string
     */
    public function getPositionid()
    {
        return $this->positionid;
    }

    /**
     * @return string
     */
    public function getRoleid()
    {
        return $this->roleid;
    }

    /**
     * @return int
     */
    public function getNodeh()
    {
        return $this->nodeh;
    }

    /**
     * @return int
     */
    public function getNodev()
    {
        return $this->nodev;
    }

    /**
     * @return string
     */
    public function getPlugin()
    {
        return $this->plugin;
    }

    /**
     * @return string
     */
    public function getPluginsave()
    {
        return $this->pluginsave;
    }

    /**
     * @return string
     */
    public function getPluginauto()
    {
        return $this->pluginauto;
    }

    /**
     * @return int
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * @return mixed
     */
    public function getAutoselect()
    {
        return $this->autoselect;
    }

    /**
     * @return string
     */
    public function getAutousermain()
    {
        return $this->autousermain;
    }

    /**
     * @return string
     */
    public function getAutouserop()
    {
        return $this->autouserop;
    }

    /**
     * @return int
     */
    public function getUserfilter()
    {
        return $this->userfilter;
    }

    /**
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @return int
     */
    public function getTimeoutset()
    {
        return $this->timeoutset;
    }

    /**
     * @return int
     */
    public function getFeedbacklook()
    {
        return $this->feedbacklook;
    }

    /**
     * @return int
     */
    public function getMaindefault()
    {
        return $this->maindefault;
    }

    /**
     * @return int
     */
    public function getUserlock()
    {
        return $this->userlock;
    }

    /**
     * @return string
     */
    public function getMailto()
    {
        return $this->mailto;
    }

    /**
     * @return int
     */
    public function getSyncdeal()
    {
        return $this->syncdeal;
    }

    /**
     * @return int
     */
    public function getTurnpriv()
    {
        return $this->turnpriv;
    }

    /**
     * @return int
     */
    public function getChildflow()
    {
        return $this->childflow;
    }

    /**
     * @return int
     */
    public function getGathernode()
    {
        return $this->gathernode;
    }

    /**
     * @return int
     */
    public function getAllowback()
    {
        return $this->allowback;
    }

    /**
     * @return string
     */
    public function getAttachpriv()
    {
        return $this->attachpriv;
    }

    /**
     * @return int
     */
    public function getAutobaseuser()
    {
        return $this->autobaseuser;
    }

    /**
     * @return string
     */
    public function getRelationin()
    {
        return $this->relationin;
    }

    /**
     * @return string
     */
    public function getRelationout()
    {
        return $this->relationout;
    }

    /**
     * @return int
     */
    public function getTimeouttype()
    {
        return $this->timeouttype;
    }

    /**
     * @return int
     */
    public function getAttacheditpriv()
    {
        return $this->attacheditpriv;
    }

    /**
     * @return string
     */
    public function getControlmode()
    {
        return $this->controlmode;
    }

    /**
     * @return string
     */
    public function getFileuploadpriv()
    {
        return $this->fileuploadpriv;
    }

    /**
     * @return string
     */
    public function getCheckitem()
    {
        return $this->checkitem;
    }

    /**
     * @return int
     */
    public function getAddfeedback()
    {
        return $this->addfeedback;
    }

    /**
     * @return int
     */
    public function getAllowfeedback()
    {
        return $this->allowfeedback;
    }

    /**
     * @return int
     */
    public function getOveract()
    {
        return $this->overact;
    }

    /**
     * @return string
     */
    public function getBackinfo()
    {
        return $this->backinfo;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

}