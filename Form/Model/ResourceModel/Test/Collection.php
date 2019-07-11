<?php
namespace Excellence\Form\Model\ResourceModel\Test;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Excellence\Form\Model\Test','Excellence\Form\Model\ResourceModel\Test');
    }
}
