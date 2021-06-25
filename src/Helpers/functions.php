<?php

use Illuminate\Database\Eloquent\Model;

if (!function_exists('constExists')) {
    /**
     * @param $class
     * @param string $constant
     * @return bool
     */
    function constExists($class, string $constant): bool
    {
        if (is_object($class)) $class = get_class($class);
        return defined(sprintf("%s::%s", $class, $constant));
    }
}

if (!function_exists('propVal')) {
    /**
     * @param object $object
     * @param string $name
     * @param null $default
     * @return mixed|null
     */
    function propVal(object $object, string $name, $default = null)
    {
        if (!property_exists($object, $name)) return $default;
        return $object->{$name} ?? $default;
    }
}

if (!function_exists('staticPropVal')) {
    /**
     * @param string $class
     * @param string $name
     * @param null $default
     * @return mixed|null
     */
    function staticPropVal(string $class, string $name, $default = null)
    {
        if (!property_exists($class, $name)) return $default;
        return $class::$$name;
    }
}

if (!function_exists('constVal')) {
    /**
     * @param $class
     * @param string $constant
     * @param null $default
     * @return mixed|null
     */
    function constVal($class, string $constant, $default = null)
    {
        if (!constExists($class, $constant)) return $default;
        return constant(sprintf("%s::%s", $class, $constant)) ?? $default;
    }
}

if (!function_exists('hasTrait')) {
    /**
     * @param string|object $model
     * @param string $trait
     * @return bool
     */
    function hasTrait($model, string $trait): bool
    {
        if (is_object($model)) $model = get_class($model);
        return in_array($trait, class_uses_recursive($model), true);
    }
}

if (!function_exists('society')) {
    /**
     * @param string|null $repository
     * @param mixed|Model $user
     * @return mixed|null
     */
    function society(string $repository = null, Model $user = null)
    {
        if (is_null($user)) $user = request()->user();
        if (!hasTrait($user->getMorphClass(), "Milebits\\Society\\Concerns\\Sociable")) return null;
        if (is_null($repository)) return $user->society();
        return $user->society()->buildRepository($repository);
    }
}