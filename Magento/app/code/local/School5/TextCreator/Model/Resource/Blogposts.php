<?php

class School5_TextCreator_Model_Resource_Blogposts extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('textcreator/blog_posts', 'post_id');
    }
}
