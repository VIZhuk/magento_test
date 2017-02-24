<?php

class TZ_Stores_Model_Observer
{
    public function addToTopmenu(Varien_Event_Observer $observer)
    {
        $menu = $observer->getMenu();
        $tree = $menu->getTree();
        // create a menu tree node
        $node = new Varien_Data_Tree_Node(array(
            'name'   => 'Offline Stores',
            'id'     => 'offline_stores',
            'url'    => Mage::getUrl('stores') // Link url
        ), 'id', $tree, $menu);
        // add node to menu
        $menu->addChild($node);
    }

}