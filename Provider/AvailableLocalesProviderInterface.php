<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Locale\Provider;

/**
 * @author Anna Walasek <anna.walasek@lakion.com>
 */
interface AvailableLocalesProviderInterface
{
    /**
     * @return string[]
     */
    public function getAvailableLocalesCodes();
}
