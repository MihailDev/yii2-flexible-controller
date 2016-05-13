<?php
/**
 * Date: 22.02.2016
 * Time: 0:09
 */

namespace mihaildev\flexibleController;


class Controller extends \yii\web\Controller
{
    protected $_behaviorsData;
    public $actions;

    public function setBehaviors($behaviors){
        $this->_behaviorsData = $behaviors;
    }

    public function behaviors()
    {
        if(is_array($this->_behaviorsData))
            return $this->_behaviorsData;

        if(is_callable($this->_behaviorsData))
            return call_user_func($this->_behaviorsData, $this);

        return parent::behaviors();
    }

    public function actions()
    {
        if(is_array($this->actions))
            return $this->actions;

        if(is_callable($this->actions))
            return call_user_func($this->actions, $this);

        return parent::actions();
    }
}