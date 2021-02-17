<?php

namespace Milebits\Helpers\Tests\Feature;

use Milebits\Helpers\Tests\Models\EmptyClass;
use Milebits\Helpers\Tests\Models\FilledClass;
use Milebits\Helpers\Tests\Models\SomeTrait;
use Milebits\Helpers\Tests\TestCase;
use function Milebits\Helpers\Helpers\constExists;
use function Milebits\Helpers\Helpers\constVal;
use function Milebits\Helpers\Helpers\hasTrait;
use function Milebits\Helpers\Helpers\propVal;
use function Milebits\Helpers\Helpers\staticPropVal;

class FunctionsTest extends TestCase
{
    /**
     * @test
     */
    public function assertConstExist()
    {
        $this->assertTrue(constExists(FilledClass::class, "CONSTANT"));
        $this->assertFalse(constExists(EmptyClass::class, "CONSTANT"));
    }

    /**
     * @test
     */
    public function assertConstVal()
    {
        self::assertEquals(null, constVal(FilledClass::class, "CONSTANT2"));
        self::assertEquals("CONSTANT", constVal(FilledClass::class, "CONSTANT"));
        self::assertEquals("DEFAULT", constVal(FilledClass::class, "CONSTANT2", "DEFAULT"));

        self::assertEquals(null, constVal(EmptyClass::class, "CONSTANT"));
        self::assertEquals("DEFAULT", constVal(EmptyClass::class, "CONSTANT", "DEFAULT"));
    }

    /**
     * @test
     */
    public function assertStaticPropVal()
    {
        self::assertEquals(null, staticPropVal(FilledClass::class, "staticProp2"));
        self::assertEquals("staticProp", staticPropVal(FilledClass::class, "staticProp"));
        self::assertEquals("DEFAULT", staticPropVal(FilledClass::class, "staticProp2", "DEFAULT"));

        self::assertEquals(null, staticPropVal(EmptyClass::class, "staticProp"));
        self::assertEquals("DEFAULT", staticPropVal(EmptyClass::class, "staticProp2", "DEFAULT"));
    }

    /**
     * @test
     */
    public function assertPropVal()
    {
        self::assertEquals(null, propVal(new FilledClass(), "prop2"));
        self::assertEquals("prop", propVal(new FilledClass(), "prop"));
        self::assertEquals("default", propVal(new FilledClass(), "prop2", "default"));

        self::assertEquals(null, propVal(new EmptyClass(), "prop2"));
        self::assertEquals("default", propVal(new EmptyClass(), "prop2", "default"));
    }

    /**
     * @test
     */
    public function assertHasTrait()
    {
        self::assertTrue(hasTrait(FilledClass::class, SomeTrait::class));
        self::assertTrue(hasTrait(new FilledClass(), SomeTrait::class));
        self::assertFalse(hasTrait(EmptyClass::class, SomeTrait::class));
        self::assertFalse(hasTrait(new EmptyClass(), SomeTrait::class));
    }
}