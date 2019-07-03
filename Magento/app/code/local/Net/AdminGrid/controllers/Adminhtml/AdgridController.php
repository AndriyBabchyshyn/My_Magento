<?php
class Net_AdminGrid_Adminhtml_AdgridController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		return Mage::getSingleton('admin/session')->isAllowed('admingrid/adgrid');
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Admin Grid"));
	   $this->renderLayout();
    }
}