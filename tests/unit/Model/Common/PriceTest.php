<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Model\Common;

class PriceTest extends \PHPUnit_Framework_TestCase
{
    public function testFromArray()
    {
        $this->assertInstanceOf(
            '\Commercetools\Core\Model\Common\Price',
            Price::fromArray(['value' => ['currencyCode' => 'EUR', 'centAmount' => 100]])
        );
    }

    public function testToString()
    {
        $context = Context::of();
        $context->getCurrencyFormatter()->setFormatCallback(
            function ($centAmount, $currency) {
                return number_format($centAmount/100, 2) . ' ' . $currency;
            }
        );
        $price = Price::fromArray(['value' => ['currencyCode' => 'EUR', 'centAmount' => 100]], $context);
        $this->assertSame('1.00 EUR', (string)$price);
    }
}
