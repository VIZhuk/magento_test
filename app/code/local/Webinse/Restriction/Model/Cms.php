<?php

class Webinse_Restriction_Model_Cms
{
    public function toOptionArray()
    {
        if (is_null($this->_options)){
            $this->_options = array();
            $collection = Mage::getModel('cms/page')->getCollection();
            foreach ($collection as $block) {
                $this->_options[] = array('label'=> $block->getTitle(), value => $block->getId());
            }
        }

        return $this->_options;

    }

}