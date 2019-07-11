<?php
namespace Excellence\Form\Controller\Form;
use Magento\Framework\Controller\ResultFactory;
class World extends \Magento\Framework\App\Action\Action
{
      public function execute()
      {
           $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
           // Your code
           $resultRedirect->setPath('excellence/block');
           return $resultRedirect;
      }
}
 
 
// class World extends \Magento\Framework\App\Action\Action
// {
//     protected $resultPageFactory;
//     public function __construct(
//         \Magento\Framework\App\Action\Context $context,
//         \Magento\Framework\View\Result\PageFactory $resultPageFactory)
//     {
//         $this->registry = $registry;
//         $this->resultPageFactory = $resultPageFactory;       
//         return parent::__construct($context);
//     }
     
//     public function execute()
//     {
//          $this->registry->register('test_var', 'this is a test!');
//         return $this->resultPageFactory->create(); 

//     } 
// }
?>