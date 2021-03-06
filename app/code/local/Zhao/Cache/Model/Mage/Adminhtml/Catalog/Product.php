<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @version    $Id: Page.php 2017-10-14 03:03:13 Zhao<303685256@qq.com> $
 */

/**
 * Magento mage cache for Product
 *
 * @category   Zhao_Cache
 * @author     Zhang Zhao<303685256@qq.com>
 */
class Zhao_Cache_Model_Mage_Adminhtml_Catalog_Product extends Zhao_Cache_Model_Mage_Catalog_Product_View
{
    /**
     * Clear the product cache.
     *
     * @param  Varien_Event_Observer $observer
     * @return boolean
     */
    public function ClearCache(Varien_Event_Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        
        return $this->clean($product->getId());

    }
}