<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Request\CustomObjects;

use Commercetools\Core\Client\HttpMethod;
use Commercetools\Core\Model\CustomObject\CustomObject;
use Commercetools\Core\RequestTestCase;

/**
 * Class CustomObjectDeleteByKeyRequestTest
 * @package Commercetools\Core\Request\CustomObjects
 */
class CustomObjectDeleteByKeyRequestTest extends RequestTestCase
{
    const CUSTOM_OBJECT_DELETE_REQUEST = '\Commercetools\Core\Request\CustomObjects\CustomObjectDeleteByKeyRequest';

    public function getObject()
    {
        return new CustomObject();
    }

    public function testMapResult()
    {
        $result = $this->mapResult(CustomObjectDeleteByKeyRequest::ofContainerAndKey('my-namespace', 'my-key'));
        $this->assertInstanceOf('\Commercetools\Core\Model\CustomObject\CustomObject', $result);
    }

    public function testMapEmptyResult()
    {
        $result = $this->mapEmptyResult(CustomObjectDeleteByKeyRequest::ofContainerAndKey('my-namespace', 'my-key'));
        $this->assertNull($result);
    }

    public function testHttpRequestMethod()
    {
        $request = CustomObjectDeleteByKeyRequest::ofContainerAndKey('my-namespace', 'my-key');
        $httpRequest = $request->httpRequest();

        $this->assertSame(HttpMethod::DELETE, $httpRequest->getMethod());
    }
}
