<?php

class School5_Complexworld_Block_Detail extends Mage_Core_Block_Template
{
    public function getEditUrl(School5_Complexworld_Model_Eavblogpost $post)
    {
        return $this->getUrl('*/*/edit/id', array(
            'id' => $post->getId()
        ));
    }
    public function getDeleteUrl(School5_Complexworld_Model_Eavblogpost $post)
    {
        return $this->getUrl('*/*/delete/id', array(
            'id' => $post->getId()
        ));
    }
    public function getPost()
    {
        return Mage::registry('post');
    }
}