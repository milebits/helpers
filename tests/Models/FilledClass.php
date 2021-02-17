<?php


namespace Milebits\Helpers\Tests\Models;


class FilledClass
{
    use SomeTrait;

    public static string $staticProp = "staticProp";
    public string $prop = "prop";
    const CONSTANT = "CONSTANT";
}