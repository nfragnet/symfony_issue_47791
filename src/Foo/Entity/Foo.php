<?php

namespace App\Foo\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class Foo
{
    /**
     * @ORM\Column
     */
    protected string $foo = 'foo';
}
