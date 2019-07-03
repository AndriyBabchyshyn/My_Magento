<?php
class Net_AdminGrid_Model_Resource_Adgrid_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {  
        $this->_init('admingrid/adgrid');
    }  
}