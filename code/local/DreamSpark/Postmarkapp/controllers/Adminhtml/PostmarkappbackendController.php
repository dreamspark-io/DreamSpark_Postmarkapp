<?php
class DreamSpark_Postmarkapp_Adminhtml_PostmarkappbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Postmarkapp"));
	   $this->renderLayout();
    }
}