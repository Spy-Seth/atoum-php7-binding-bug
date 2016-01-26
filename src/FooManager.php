<?php

namespace MyProject;

class FooManager
{
    /**
     * @var FooRepositoryInterface
     */
    private $fooRepository;

    public function __construct(FooRepositoryInterface $fooRepository)
    {
        $this->fooRepository = $fooRepository;
    }

    public function refreshFoo(Foo $foo): Foo
    {
        // ...

        return $this->loadFoo($foo->getId());
    }

    public function loadFoo(int $id): Foo
    {
        return $this->fooRepository->load($id);
    }
}
