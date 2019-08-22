<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace SmileSolutions\SimpleInvoice\Model;

use Magento\Payment\Block\Info\Instructions;
use Magento\Payment\Model\Method\AbstractMethod;
use Magento\Quote\Api\Data\PaymentMethodExtensionInterface;

/**
 * Class SimpleInvoice
 *
 * @method PaymentMethodExtensionInterface getExtensionAttributes()
 *
 * @api
 * @since 100.0.2
 */
class SimpleInvoice extends AbstractMethod
{
    const PAYMENT_METHOD_SIMPLE_INVOICE_CODE = 'simpleinvoice';

    /**
     * Payment method code
     *
     * @var string
     */
    protected $_code = self::PAYMENT_METHOD_SIMPLE_INVOICE_CODE;

    /**
     * Simple Invoice payment block paths
     *
     * @var string
     */
    protected $_formBlockType = \SmileSolutions\SimpleInvoice\Block\Form\SimpleInvoice::class;

    /**
     * Instructions block path
     *
     * @var string
     */
    protected $_infoBlockType = Instructions::class;

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;

    /**
     * Get instructions text from config
     *
     * @return string
     */
    public function getInstructions()
    {
        return trim($this->getConfigData('instructions'));
    }
}