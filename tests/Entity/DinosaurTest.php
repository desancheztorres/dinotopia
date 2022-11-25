<?php

declare(strict_types=1);

namespace App\Tests\Entity;

use App\Entity\Dinosaur;
use PHPUnit\Framework\TestCase;

final class DinosaurTest extends TestCase
{
    public function testCanGetAndSetData(): void
    {
        $dino = new Dinosaur(
            name: 'Big Eaty',
            genus: 'Tyrannosaurus',
            length: 15,
            enclosure: 'Paddock A'
        );

        self::assertSame('Big Eaty', $dino->getName());
        self::assertSame('Tyrannosaurus', $dino->getGenus());
        self::assertSame(15, $dino->getLength());
        self::assertSame('Paddock A', $dino->getEnclosure());
    }

    public function testDinosaurOver10MetersOrGreaterIsLarge(): void
    {
        $dino = new Dinosaur(name: 'Big Eaty', length: 10);

        self::assertSame('Large', $dino->getSizeDescription(), 'This is supposed to be a Large Dinosaur');
    }
}