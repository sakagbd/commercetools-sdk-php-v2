<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\LocalizedString;

interface CategoryChangeAssetNameAction extends CategoryUpdateAction
{
    const FIELD_ASSET_ID = 'assetId';
    const FIELD_ASSET_KEY = 'assetKey';
    const FIELD_NAME = 'name';

    /**
     * @return null|string
     */
    public function getAssetId();

    /**
     * @return null|string
     */
    public function getAssetKey();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    public function setAssetId(?string $assetId): void;

    public function setAssetKey(?string $assetKey): void;

    public function setName(?LocalizedString $name): void;
}