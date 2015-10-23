<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Request\Messages;

use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Request\AbstractQueryRequest;
use Commercetools\Core\Model\Message\MessageCollection;
use Commercetools\Core\Response\ApiResponseInterface;

/**
 * @package Commercetools\Core\Request\Messages
 * @apidoc http://dev.sphere.io/http-api-projects-messages.html#messages-by-query
 * @method MessageCollection mapResponse(ApiResponseInterface $response)
 */
class MessageQueryRequest extends AbstractQueryRequest
{
    protected $resultClass = '\Commercetools\Core\Model\Message\MessageCollection';

    /**
     * @param Context $context
     */
    public function __construct(Context $context = null)
    {
        parent::__construct(MessagesEndpoint::endpoint(), $context);
    }

    /**
     * @param Context $context
     * @return static
     */
    public static function of(Context $context = null)
    {
        return new static($context);
    }
}