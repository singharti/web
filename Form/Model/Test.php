<?php
namespace Excellence\Form\Model;
class Test extends \Magento\Framework\Model\AbstractModel 
{
    const CACHE_TAG = 'excellence_form_test';
 
    protected function _construct()
    {
        $this->_init('Excellence\Form\Model\ResourceModel\Test');
    }
 
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
