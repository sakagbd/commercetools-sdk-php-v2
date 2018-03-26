<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\TaxCategoryUpdateBuilder;
use Commercetools\Types\TaxCategory\TaxCategoryAddTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategoryChangeNameAction;
use Commercetools\Types\TaxCategory\TaxCategoryRemoveTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategoryReplaceTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategorySetDescriptionAction;
use Commercetools\Types\TaxCategory\TaxCategorySetKeyAction;
use Commercetools\Types\TaxCategory\TaxCategory;
use Commercetools\Types\TaxCategory\TaxCategoryUpdate;
use Commercetools\Request\ByProjectKeyTaxCategoriesByIDPost;

use Commercetools\Types\TaxCategory\TaxCategoryAddTaxRateActionModel;
use Commercetools\Types\TaxCategory\TaxCategoryChangeNameActionModel;
use Commercetools\Types\TaxCategory\TaxCategoryRemoveTaxRateActionModel;
use Commercetools\Types\TaxCategory\TaxCategoryReplaceTaxRateActionModel;
use Commercetools\Types\TaxCategory\TaxCategorySetDescriptionActionModel;
use Commercetools\Types\TaxCategory\TaxCategorySetKeyActionModel;

use PHPUnit\Framework\TestCase;

class TaxCategoryBuilderTest extends TestCase {
    public function testAddTaxRateCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->addTaxRate(function ($action) { static::assertInstanceOf(TaxCategoryAddTaxRateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryAddTaxRateAction::class, $update->getActions()->current());
    }

    public function testAddTaxRateInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->addTaxRate(new TaxCategoryAddTaxRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryAddTaxRateAction::class, $update->getActions()->current());
    }

    public function testChangeNameCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->changeName(function ($action) { static::assertInstanceOf(TaxCategoryChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->changeName(new TaxCategoryChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryChangeNameAction::class, $update->getActions()->current());
    }

    public function testRemoveTaxRateCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->removeTaxRate(function ($action) { static::assertInstanceOf(TaxCategoryRemoveTaxRateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryRemoveTaxRateAction::class, $update->getActions()->current());
    }

    public function testRemoveTaxRateInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->removeTaxRate(new TaxCategoryRemoveTaxRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryRemoveTaxRateAction::class, $update->getActions()->current());
    }

    public function testReplaceTaxRateCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->replaceTaxRate(function ($action) { static::assertInstanceOf(TaxCategoryReplaceTaxRateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryReplaceTaxRateAction::class, $update->getActions()->current());
    }

    public function testReplaceTaxRateInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->replaceTaxRate(new TaxCategoryReplaceTaxRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryReplaceTaxRateAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setDescription(function ($action) { static::assertInstanceOf(TaxCategorySetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategorySetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setDescription(new TaxCategorySetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategorySetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetKeyCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setKey(function ($action) { static::assertInstanceOf(TaxCategorySetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategorySetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setKey(new TaxCategorySetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategorySetKeyAction::class, $update->getActions()->current());
    }

}