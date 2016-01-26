<?php

namespace MyProject;

class Foo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    public function __construct(int $id, string $label)
    {
        $this->id = $id;
        $this->label = $label;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
