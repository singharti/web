<?php
namespace Excellence\NavLink\Plugin\Block\Html;
 
use Magento\Framework\Data\Tree\NodeFactory;
 
class Topmenu
{
    protected $nodeFactory;
    protected $_storeManager;
    protected $_urlBuilder;
 
    public function __construct(
        NodeFactory $nodeFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\UrlInterface $urlBuilder
    ) {
        $this->nodeFactory = $nodeFactory;
        $this->_storeManager = $storeManager;
        $this->_urlBuilder = $urlBuilder;
    }
 
    public function beforeGetHtml(
        \Magento\Theme\Block\Html\Topmenu $subject,
        $outermostClass = '',
        $childrenWrapClass = '',
        $limit = 0
    ) {
        $node = $this->nodeFactory->create(
            [
                'data' => [
                    'name' => 'Custom Link',
                    'id' => 'customlink',
                    'url' =>  $this->_urlBuilder->getUrl('customlink'),
                    'has_active' => false,
                    'is_active' => false // (expression to determine if menu item is selected or not)
                ],
                'idField' => 'id',
                'tree' => $subject->getMenu()->getTree()
            ]
        );
        $subject->getMenu()->addChild($node);
    }
}