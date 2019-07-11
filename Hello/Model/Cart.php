<?php
 
namespace Excellence\Hello\Model;
 
class Cart
{
public function beforeAddProduct(\Magento\Checkout\Model\Cart $cart, $productInfo, $requestInfo = null)
{
$requestInfo['qty'] = 5; // set quantity to 5
return array(
$productInfo,
$requestInfo
);
}
}
?>