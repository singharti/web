<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Excellence\SliderModule\Helper;
use Magento\Framework\App\Filesystem\DirectoryList;
/**
 * Checkout default helper
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	protected $_filesystem;

	public function __construct(
   \Magento\Framework\Filesystem $filesystem
)
		{
		   $this->_filesystem = $filesystem;
		}
}
