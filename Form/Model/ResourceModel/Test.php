<?php
namespace Excellence\Form\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('excellence_form_test','test_id');
    }
}
