<?php

namespace FondOfOryx\Zed\ProductLocaleRestriction\Business;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfOryx\Zed\ProductLocaleRestriction\Persistence\ProductLocaleRestrictionEntityManagerInterface getEntityManager()
 * @method \FondOfOryx\Zed\ProductLocaleRestriction\Persistence\ProductLocaleRestrictionRepositoryInterface getRepository()
 * @method \FondOfOryx\Zed\ProductLocaleRestriction\Business\ProductLocaleRestrictionBusinessFactory getFactory()
 */
class ProductLocaleRestrictionFacade extends AbstractFacade implements ProductLocaleRestrictionFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return void
     */
    public function persistProductAbstractLocaleRestrictions(
        ProductAbstractTransfer $productAbstractTransfer
    ): void {
        $this->getFactory()->createProductAbstractLocaleRestrictionsPersister()->persist($productAbstractTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function expandProductAbstract(ProductAbstractTransfer $productAbstractTransfer): ProductAbstractTransfer
    {
        return $this->getFactory()->createProductAbstractExpander()->expand($productAbstractTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param array<int> $productAbstractIds
     *
     * @return array
     */
    public function getBlacklistedLocalesByProductAbstractIds(array $productAbstractIds): array
    {
        return $this->getRepository()->findBlacklistedLocalesByProductAbstractIds($productAbstractIds);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param array<string> $productConcreteSkus
     *
     * @return array
     */
    public function getBlacklistedLocalesByProductConcreteSkus(array $productConcreteSkus): array
    {
        return $this->getRepository()->findBlacklistedLocalesByProductConcreteSkus($productConcreteSkus);
    }
}
