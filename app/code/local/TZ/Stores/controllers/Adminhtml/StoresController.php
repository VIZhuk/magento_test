<?php

class TZ_Stores_Adminhtml_StoresController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {

        $this->loadLayout();
        $this->_setActiveMenu('tzstores');

        $contentBlock = $this->getLayout()->createBlock('tzstores/adminhtml_stores');
        $this->_addContent($contentBlock);
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        $id = (int) $this->getRequest()->getParam('id');
        $model = Mage::getModel('tzstores/stores');

        if ($data = Mage::getSingleton('adminhtml/session')->getFormData()) {
            $model->setData($data)->setId($id);
        } else {
            $model->load($id);
        }
        Mage::register('current_stores', $model);


        $this->loadLayout()->_setActiveMenu('tzstores');
        $this->_addLeft($this->getLayout()->createBlock('tzstores/adminhtml_stores_edit_tabs'));
        $this->_addContent($this->getLayout()->createBlock('tzstores/adminhtml_stores_edit'));
        $this->renderLayout();
    }

    public function saveAction()
    {
        $id = $this->getRequest()->getParam('id');
        if ($data = $this->getRequest()->getPost()) {
            try {
                $helper = Mage::helper('tzstores');
                $model = Mage::getModel('tzstores/stores');

                $model->setData($data)->setId($id);
                if ($model->getCreated()) {
                    $model->setCreated(now());
                }
                $model->save();
                $id = $model->getId();

                if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
                    $uploader = new Varien_File_Uploader('image');
                    $uploader->setAllowedExtensions(array('jpg', 'jpeg'));
                    $uploader->setAllowRenameFiles(false);
                    $uploader->setFilesDispersion(false);
                    $uploader->save($helper->getImagePath(), $id . '.jpg');
                } else {
                    if (isset($data['image']['delete']) && $data['image']['delete'] == 1) {
                        @unlink($helper->getImagePath($id));
                    }
                }

                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('Store was saved seccussfully'));
                Mage::getSingleton('adminhtml/session')->setFormData(false);

                // check for save and continue
                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect(
                        '*/*/edit',
                        array(
                            'id' => $model->getId(),
                        )
                    );
                    return;
                }

                $this->_redirect('*/*/');
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setFormData($data);
                $this->_redirect('*/*/edit', array(
                    'id' => $this->getRequest()->getParam('id')
                ));
            }
            return;
        }

        Mage::getSingleton('adminhtml/session')->addError($this->__('Unable to find item to save'));
        $this->_redirect('*/*/');
    }

    public function deleteAction()
    {
        if ($id = $this->getRequest()->getParam('id')) {
            try {
                Mage::getModel('tzstores/stores')->setId($id)->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('Store was deleted successfully'));
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $id));
            }
        }
        $this->_redirect('*/*/');

    }
    
}