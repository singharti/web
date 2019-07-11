<?php
 
 
namespace Excellence\Hello\Observer;
 
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
 
 
class Feedback implements ObserverInterface
{
 
   
    public function __construct()
    {
   
    }
 
    public function execute(Observer $observer)
    {
        // $this->logger->warn('Observer Works');
        //exit; un commet this to make sure event works
        echo "gvhgv";
        die();
    }
}