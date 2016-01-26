<?php

namespace MyProject;

interface FooRepositoryInterface
{
    public function load(int $id): Foo;
}
