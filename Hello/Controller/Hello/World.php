<?php
namespace Excellence\Hello\Controller\Hello;
 
 
class World extends \Magento\Framework\App\Action\Action
{
     protected $resultPageFactory;
    protected $_testFactory;
     protected $_scopeConfig;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->_resultPageFactory = $resultPageFactory; 
        $this->_testFactory = $testFactory; 
        $this->_scopeConfig = $scopeConfig;
        return parent::__construct($context);
    }
     
    public function execute()
    {
        $this->resultPageFactory = $this->_resultPageFactory->create();  
  $this->resultPageFactory->getConfig()->getTitle()->set((__('Welcome to Excellence')));


     $firstName = $this->_scopeConfig->getValue('helloworld/active_display/first');
     $lastName = $this->_scopeConfig->getValue('helloworld/active_display/last');
        $post = $this->getRequest()->getPostValue();
        if (!empty($post)) {
                $test = $this->_testFactory->create();
                $test->setData($post);
                $test->save();
                $this->messageManager->addSuccess( __('thankyou!! '. $firstName.' '.$lastName.' will contact you soon!!') );

        }

                return $this->_resultPageFactory->create(); 
    } 
}
