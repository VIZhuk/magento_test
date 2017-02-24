<?php

class TZ_Stores_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();

    }

    public function paginationAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function viewAction()
    {
        $storesId = Mage::app()->getRequest()->getParam('id', 0);
        $stores = Mage::getModel('tzstores/stores')->load($storesId);
        

        if ($stores->getId() > 0) {
            $this->loadLayout();
            $this->getLayout()->getBlock('stores.description')->assign(array(
                "storesItem" => $stores,
            ));
            $this->renderLayout();
        } else {
            $this->_forward('noRoute');
        }
    }
}