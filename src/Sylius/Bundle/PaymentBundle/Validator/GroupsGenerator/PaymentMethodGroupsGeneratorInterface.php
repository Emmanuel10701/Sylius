<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\PaymentBundle\Validator\GroupsGenerator;

use Sylius\Component\Payment\Model\PaymentMethodInterface;

interface PaymentMethodGroupsGeneratorInterface
{
    /** @return array<string> */
    public function __invoke(PaymentMethodInterface $paymentMethod): array;
}
