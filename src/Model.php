<?php

namespace LaravelCMC\Components;

use Illuminate\Support\Facades\Request;

trait Model
{
    /**
     * @param $name
     * @param null $value
     * @return array|mixed|string|null
     */
    public function getValue($name, $value = null)
    {
        if (is_null($name))
            return $value;

        $old = old($name);
        if (!is_null($old))
            return $old;

        if (function_exists('app')) {
            $hasNullMiddleware = app("Illuminate\Contracts\Http\Kernel")->hasMiddleware(ConvertEmptyStringsToNull::class);

            if ($hasNullMiddleware && is_null($old) && is_null($value) && !is_null(view()->shared('errors'))
                && count(is_countable(view()->shared('errors')) ? view()->shared('errors') : []) > 0
            ) {
                return null;
            }
        }

        $request = Request::input($name);
        if (!is_null($request))
            return $request;

        if (!is_null($value))
            return $value;

        if (isset(self::$model))
            return $this->getModelValue($name);
    }

    /**
     * @param $name
     * @return mixed
     */
    protected function getModelValue($name)
    {
        $name = str_replace(['[]', '[', ']'], ['', '.', ''], $name);

        return data_get(self::$model, $name);
    }
}
