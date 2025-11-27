<?php

/*
 * This file is part of ACSEO's SyliusTypesense for Sylius.
 * (c) ACSEO <contact@acseo.fr>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ACSEO\SyliusTypesense\Manager;

use ACSEO\TypesenseBundle\Finder\TypesenseQuery;
use ACSEO\TypesenseBundle\Finder\TypesenseResponse;

class ProductSearchManager
{
    /** @phpstan-ignore-next-line */
    private $productFinder;

    /** @phpstan-ignore-next-line */
    public function __construct($productFinder)
    {
        $this->productFinder = $productFinder;
    }

    /** @phpstan-ignore-next-line */
    public function search(string $queryValue, int $page, int $limit): TypesenseResponse
    {
        
        $query = new TypesenseQuery($queryValue, 'code,translations,taxons,embedding');
        $query->addParameter('prefix', true);
        $query->addParameter('page', $page);
        $query->addParameter('per_page', $limit);

        return $this->productFinder->query($query);
        
    }
}
