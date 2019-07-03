<?php

class school5_ProductLogUpdate_Model_Observer
{

    public function logUpdate(Varien_Event_Observer $observer)
    {

        $product = $observer->getEvent()->getProduct();

        $name = $product->getName();
        $sku = $product->getSku();
        Mage::log($name . ', ' . $sku . ' - updated', null, 'productUpdates.log');
    }
}
