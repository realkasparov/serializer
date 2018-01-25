<?php

/*
 * This file is part of the 4devs Serialiser package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FDevs\Serializer\Mapping\Factory;

trait ClassResolverTrait
{
    /**
     * @param string|object $value
     *
     * @return string
     */
    private function getClass($value)
    {
        return ltrim(is_object($value) ? get_class($value) : $value, '\\');
    }
}
