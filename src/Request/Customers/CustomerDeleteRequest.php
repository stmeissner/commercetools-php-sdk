<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 * @created: 12.02.15, 12:12
 */

namespace Sphere\Core\Request\Customers;

use Sphere\Core\Model\Common\Context;
use Sphere\Core\Request\AbstractDeleteRequest;
use Sphere\Core\Model\Customer\Customer;
use Sphere\Core\Response\ApiResponseInterface;

/**
 * @package Sphere\Core\Request\Customers
 * @apidoc http://dev.sphere.io/http-api-projects-customers.html#delete-customer
 * @method Customer mapResponse(ApiResponseInterface $response)
 */
class CustomerDeleteRequest extends AbstractDeleteRequest
{
    protected $resultClass = '\Sphere\Core\Model\Customer\Customer';

    /**
     * @param string $id
     * @param int $version
     * @param Context $context
     */
    public function __construct($id, $version, Context $context = null)
    {
        parent::__construct(CustomersEndpoint::endpoint(), $id, $version, $context);
    }

    /**
     * @param string $id
     * @param int $version
     * @param Context $context
     * @return static
     */
    public static function ofIdAndVersion($id, $version, Context $context = null)
    {
        return new static($id, $version, $context);
    }
}