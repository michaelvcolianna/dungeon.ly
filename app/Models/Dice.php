<?php

namespace App\Models;

use DiceCalc\Calc;

class Dice
{
    public static function roll($quantity = 1, $type = 'd20', $modifier = null, $expression = null)
    {
        $extra = null;

        if($modifier)
        {
            $modifier = intval($modifier);
            $operator = $modifier < 0 ? '-' : '+';
            $extra = sprintf('%s%s', $operator, abs($modifier));
        }

        $expression ??= sprintf('%s%s%s', $quantity, $type, $extra);

        $roll = new Calc($expression);

        return [
            'datetime' => now()->format('g:i:sa'),
            'total' => $roll(),
            'details' => $roll->infix(),
        ];
    }

    public static function __callStatic($name, $arguments)
    {
        $arguments ??= null;

        return static::roll(expression: $name);
    }

    public static function advantage()
    {
        return static::roll(expression: '2d20h1');
    }

    public static function disadvantage()
    {
        return static::roll(expression: '2d20l1');
    }
}
