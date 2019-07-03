<?php

class School5_TextCreator_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction()
    {

        $weblog2 = Mage::getModel('textcretor/blogposts');
        $weblog2->load(1);
        var_dump($weblog2);

//        $this->loadLayout();
//        $this->renderLayout();
    }

    /**
     * echo string
     */
    public function testModelAction()
    {
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('textcreator/blogposts');
        echo("Loading the blogposts with an ID of ".$params['id']);
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
        var_dump($data);
    }

    /**
     * Create
     */
    public function createNewPostAction()
    {
        $blogpost = Mage::getModel('textcreator/blogposts');
        $blogpost->setTitle('Code Post!');
        $blogpost->setPost('This post was created from code!');
        $blogpost->save();
        echo 'post with ID ' . $blogpost->getId() . ' created';
    }

    /**
     * Update
     */
    public function editFirstPostAction() {
        $blogpost = Mage::getModel('textcreator/blogposts');
        $blogpost->load(1);
        $blogpost->setTitle("The First post!");
        $blogpost->save();
        echo 'post edited';
    }

    /**
     * Delete
     */
    public function deleteFirstPostAction() {
        $blogpost = Mage::getModel('textcreator/blogposts');
        $blogpost->load(1);
        $blogpost->delete();
        echo 'post removed';
    }

    /**
     * Collection from blogpost
     */
    public function showAllBlogPostsAction()
    {
        $posts = Mage::getModel('textcreator/blogposts')->getCollection();
        foreach($posts as $blogpost){
            echo '<h3>'.$blogpost->getTitle().'</h3>';
            echo nl2br($blogpost->getPost());
        }
    }
}