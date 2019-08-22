<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace SmileSolutions\SimpleInvoice\Block\Form;

use Magento\OfflinePayments\Block\Form\AbstractInstruction;

/**
 * Block for Simple Invoice payment method form
 */
class SimpleInvoice extends AbstractInstruction
{
    /**
     * Simple Invoice template
     *
     * @var string
     */
    protected $_template = 'SmileSolutions_SimpleInvoice::form/simpleinvoice.phtml';
}
