<?php

declare(strict_types=1);

namespace MarcusJaschen\Collmex\Tests\Unit\Type;

use MarcusJaschen\Collmex\Type\AbstractType;
use MarcusJaschen\Collmex\Type\BillOfMaterialGet;
use MarcusJaschen\Collmex\Type\TypeInterface;
use PHPUnit\Framework\TestCase;

class BillOfMaterialGetTest extends TestCase
{
    /**
     * @test
     */
    public function isAbstractType(): void
    {
        $subject = new BillOfMaterialGet([]);

        self::assertInstanceOf(AbstractType::class, $subject);
    }

    /**
     * @test
     */
    public function implementsTypeInterface(): void
    {
        $subject = new BillOfMaterialGet([]);

        self::assertInstanceOf(TypeInterface::class, $subject);
    }
}
