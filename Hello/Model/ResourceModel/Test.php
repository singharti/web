<?php
namespace Excellence\Hello\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('excellence_hello_test','test_id');
    }
}
