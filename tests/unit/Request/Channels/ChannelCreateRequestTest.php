<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Request\Channels;

use Commercetools\Core\Model\Channel\ChannelDraft;
use Commercetools\Core\RequestTestCase;

class ChannelCreateRequestTest extends RequestTestCase
{
    const CHANNEL_CREATE_REQUEST = '\Commercetools\Core\Request\Channels\ChannelCreateRequest';

    protected function getDraft()
    {
        return ChannelDraft::fromArray(json_decode(
            '{
                "key": "my-channel",
                "roles": ["InventorySupply", "Primary"],
                "name": {
                    "en": "myChannel"
                },
                "description": {
                    "en": "My Channel"
                }
            }',
            true
        ));
    }

    public function testMapResult()
    {
        $result = $this->mapResult(ChannelCreateRequest::ofDraft($this->getDraft()));
        $this->assertInstanceOf('\Commercetools\Core\Model\Channel\Channel', $result);
    }

    public function testMapEmptyResult()
    {
        $result = $this->mapEmptyResult(ChannelCreateRequest::ofDraft($this->getDraft()));
        $this->assertNull($result);
    }
}
