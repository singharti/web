<?php
namespace Excellence\Form\Block;
  
class Main extends \Magento\Framework\View\Element\Template
{   
    protected $_testFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Excellence\Form\Model\TestFactory $testFactory
    )
    {
    	// $this->registry = $registry;
        $this->_testFactory = $testFactory;
        // parent::__construct($context);
    }
    protected function _prepareLayout()
    {
    $test = $this->_testFactory->create();
      // $test->load(9); 
      // print_r($test->getData('test_id')); 
      // print_r($test->getTestId());
        $test->setTitle('Test Title');
        $test->save();
        $this->setTestModel($test);
        // print_r($this->registry->registry('test_var'));
    }
}

?>
