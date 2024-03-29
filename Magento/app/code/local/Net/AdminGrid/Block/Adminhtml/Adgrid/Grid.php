<?php
class Net_AdminGrid_Block_Adminhtml_Adgrid_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function __construct()
    {
        parent::__construct();
         
        // Set some defaults for our grid
        $this->setDefaultSort('id');
        $this->setId('admingrid_adgrid_grid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);

    }
     
    protected function _getCollectionClass()
    {
        // This is the model we are using for the grid
        return 'admingrid/adgrid_collection';
    }
     
    protected function _prepareCollection()
    {
        // Get and set our collection for the grid
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);
         
        return parent::_prepareCollection();
    }
     
    protected function _prepareColumns()
    {

        // Add the columns that should appear in the grid
        $this->addColumn('id',
            array(
                'header'=> $this->__('ID'),
                'align' =>'right',
                'width' => '50px',
                'index' => 'id'
            )
        );
         
        $this->addColumn('item',
            array(
                'header'=> $this->__('Items'),
                'index' => 'item'
            )
        );         
        return parent::_prepareColumns();
    }    
}