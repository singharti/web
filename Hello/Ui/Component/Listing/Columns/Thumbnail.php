<?php
namespace Excellence\Hello\Ui\Component\Listing\Columns;
use Magento\Catalog\Helper\Image;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Ui\Component\Listing\Columns\Column;
class Thumbnail extends Column {
    const URL_PATH_EDIT = 'hello/world/edit';
    const URL_PATH_DELETE = 'hello/world/delete';
    
    protected $urlBuilder;
    /**
    * @param ContextInterface $context
    * @param UiComponentFactory $uiComponentFactory
    * @param \Magento\Framework\UrlInterface $urlBuilder
    * @param array $components * @param array $data
    */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        Image $imageHelper, UrlInterface $urlBuilder, StoreManagerInterface $storeManager,
        array $components = [],
        array $data = []
    ) {
        $this->storeManager = $storeManager;
        $this->imageHelper = $imageHelper;
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }
  
    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
   public function prepareDataSource(array $dataSource)
    {
        if(isset($dataSource['data']['items'])) {
            $fieldName = $this->getData('name');
             
            foreach($dataSource['data']['items'] as & $item) {
                $url = '';
                 
                if($item[$fieldName] != '') {
                      
                   $url = $this->storeManager->getStore()->getBaseUrl(
                        \Magento\Framework\UrlInterface::URL_TYPE_MEDIA
                    ).'test/'.$item[$fieldName];
                   /* $url returning the current path or image  */
                   /* here you noties 'test' its dirctory inside pub/media folder wher all images save */
                }
               $item[$fieldName . '_src'] = $url;
                $item[$fieldName . '_alt'] = $this->getAlt($item) ?: '';
                $item[$fieldName . '_link'] = $this->urlBuilder->getUrl(
                    'hello/world/edit',
                    ['test_id' => $item['test_id']]
                );
                $item[$fieldName . '_orig_src'] = $url;
            }
        }
  
        return $dataSource;
    }
  
    /**
     * @param array $row
     *
     * @return null|string
     */
    protected function getAlt($row)
    {
        $altField = $this->getData('config/altField') ?: self::ALT_FIELD;
        return isset($row[$altField]) ? $row[$altField] : null;
    }
}