<?php

namespace Tests\Unit;

use App\Actions\ResetPasswordAction;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        ResetPasswordAction::run();
    }
}
