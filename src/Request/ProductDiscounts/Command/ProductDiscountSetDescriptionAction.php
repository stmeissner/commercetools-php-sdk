<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Request\ProductDiscounts\Command;

use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Request\AbstractAction;
use Commercetools\Core\Model\Common\LocalizedString;

/**
 * @package Commercetools\Core\Request\ProductDiscounts\Command
 * @link https://dev.commercetools.com/http-api-projects-productDiscounts.html#set-description
 * @method string getAction()
 * @method ProductDiscountSetDescriptionAction setAction(string $action = null)
 * @method LocalizedString getDescription()
 * @method ProductDiscountSetDescriptionAction setDescription(LocalizedString $description = null)
 */
class ProductDiscountSetDescriptionAction extends AbstractAction
{
    public function fieldDefinitions()
    {
        return [
            'action' => [static::TYPE => 'string'],
            'description' => [static::TYPE => '\Commercetools\Core\Model\Common\LocalizedString'],
        ];
    }

    /**
     * @param array $data
     * @param Context|callable $context
     */
    public function __construct(array $data = [], $context = null)
    {
        parent::__construct($data, $context);
        $this->setAction('setDescription');
    }
}
