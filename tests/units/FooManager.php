<?php

namespace MyProject\tests\units;

use mageekguy\atoum;
use MyProject\FooManager as SUT;

class FooManager extends atoum
{
    public function test_it_sould_generate_the_mock()
    {
        $fooRepositoryMock = new \mock\MyProject\FooRepositoryInterface();
    }

//    public function test_it_should_refresh_foo()
//    {
//        $this
//            ->given(
//                $fooRepositoryMock = new \mock\MyProject\FooRepositoryInterface(),
//                $fooManager = new SUT($fooRepositoryMock)
//            )
//            ->and(
//                $foo = new \mock\MyProject\Foo(1, 'zou')
//            )
//            ->when(
//                $newFoo = $fooManager->refreshFoo($foo)
//            )
//        ;
//    }
}
