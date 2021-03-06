<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Model\Order;

/**
 * @package Commercetools\Core\Model\Order
 * @link https://dev.commercetools.com/http-api-projects-orders.html#paymentstate
 */
class PaymentState
{
    const BALANCE_DUE = 'BalanceDue';
    const FAILED = 'Failed';
    const PENDING = 'Pending';
    const CREDIT_OWED = 'CreditOwed';
    const PAID = 'Paid';
}
