<?php

/*
 * This file is part of ACSEO's SyliusTypesense for Sylius.
 * (c) ACSEO <contact@acseo.fr>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ACSEO\SyliusTypesense\Entity\Product;

use Sylius\Component\Product\Model\ProductTranslation as BaseProductTranslation;
use Sylius\Component\Core\Model\ProductTranslationInterface;

class ProductTranslation extends BaseProductTranslation implements ProductTranslationInterface
{

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $shortDescription = null;

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): void
    {
        $this->shortDescription = $shortDescription;
    }
    
    public function __toString(): string
    {
        return $this->getName() ?? '';
    }
}
