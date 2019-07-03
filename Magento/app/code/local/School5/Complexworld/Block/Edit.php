<?php

class School5_Complexworld_Block_Edit extends Mage_Core_Block_Template
{
    public function getPost()
    {
        return Mage::registry('editPost');
    }
}