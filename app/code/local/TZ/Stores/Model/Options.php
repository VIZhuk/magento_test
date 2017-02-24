<?php

class TZ_Stores_Model_Options
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>'List View'),
            array('value'=>2, 'label'=>'Grid View'),
        );
    }
}