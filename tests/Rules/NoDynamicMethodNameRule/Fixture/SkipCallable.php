<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\NoDynamicMethodNameRule\Fixture;

use Closure;

final class SkipCallable
{
    public function run(callable $value)
    {
        $value();
    }
}
