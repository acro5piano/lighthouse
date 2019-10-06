<?php

namespace Nuwave\Lighthouse\Schema\Directives;

use Nuwave\Lighthouse\Support\Contracts\ArgDirective;
use Nuwave\Lighthouse\Support\Contracts\DefinedDirective;

class SpreadDirective implements ArgDirective, DefinedDirective
{
    const NAME = 'spread';

    /**
     * Directive name.
     *
     * @return string
     */
    public function name(): string
    {
        return self::NAME;
    }

    public static function definition(): string
    {
        return /* @lang GraphQL */ <<<'SDL'
"""
Spread out the nested values of an argument of type input object into it\'s parent.
"""
directive @spread on ARGUMENT_DEFINITION
SDL;
    }
}
