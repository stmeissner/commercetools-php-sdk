<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Sphere\Core;


class TestUtils
{
    public static function randomString()
    {
        return 'random-string-' . ((int)rand() * 100000) . '-'. time();
    }
}