<?php

namespace LaravelCMC\Components;

use Illuminate\Support\Arr;

class HtmlElement
{
    /**
     * Element tag
     *
     * @var string
     */
    public $tag = 'div';
    /**
     * Element content
     *
     * @var null
     */
    public $content = null;
    /**
     * Element attributes
     *
     * @var array
     */
    public $attributes = [];

    /**
     * HtmlElement constructor.
     *
     * @param string|null $tag
     * @param array $attributes
     * @param null $content
     */
    public function __construct(string $tag = null, array $attributes = [], $content = null) {
        $this->tag = $tag ?? 'div';
        $this->attributes = $attributes ?? [];
        $this->content = $content;
    }

    /**
     * @param array $value
     * @param string $glue
     * @return string
     */
    protected function arrayValueToStr(array $value = [], string $glue = ' '): string {
        $value = array_unique($value);

        return trim(implode($glue, $value));
    }

    /**
     * @param string $name
     * @param null $value
     * @return void
     */
    public function setAttribute($name, $value = null): void {
        $this->attributes[$name] = $value ?? true;
    }

    /**
     * @param string $name
     * @param null $value
     * @return void
     */
    public function unsetAttribute($name): void {
        unset($this->attributes[$name]);
    }

    /**
     * @param array $classes
     * @return string
     */
    public function classMerge(...$classes): string {
        $result = '';

        foreach ($classes as $class) {
            $result .= $class . ' ';
        }
        $result = trim($result);
        $result = explode(' ', $result);
        $result = array_unique($result);
        $result = implode(' ', $result);

        return $result;
    }

    /**
     * @param null|string $class
     * @return void
     */
    public function addClass(string $class = null): void {
        if (!empty($class)) {
            $this->attributes['class'] = $this->classMerge($this->attributes['class'] ?? '', $class);
        }
    }

    /**
     * @param null|string $class
     * @return void
     */
    public function removeClass(string $class = null) {
        if (isset($this->attributes['class'])) {
            if ($class === null) {
                unset($this->attributes['class']);
            } else {
                $classes = explode(' ', $this->attributes['class']);
                unset($classes[$class]);
                $this->attributes['class'] = trim(implode(' ', $classes));
            }
        }
    }

    /**
     * @param array $styles
     * @return string
     */
    public function styleMerge(...$styles): string {
        $result = '';

        foreach ($styles as $style) {
            $result .= $style . ' ';
        }
        $result = str_replace(' ', '', $result);
        $result = explode(';', $result);
        $result = array_unique($result);
        $result = implode(';', $result);

        return $result;
    }

    /**
     * @param array $attributes
     * @return array
     */
    public function attributesMerge(...$attributes): array {
        $class = $style = [];
        $result = [];

        foreach ($attributes as $attribute) {
            $class[] = Arr::pull($attribute, 'class');
            $style[] = Arr::pull($attribute, 'style');
            $result = array_merge($result, $attribute);
        }
        $class = $this->classMerge($class);
        $style = $this->styleMerge($style);
        if (!empty($class))
            $result['class'] = $class;
        if (!empty($style))
            $result['style'] = $style;

        return $result;
    }

    /**
     * @param $key
     * @param $value
     * @return string
     */
    public function attributeElement($key, $value): string {
        if (is_numeric($key)) {
            return $value;
        }

        if (is_bool($value) && $key !== 'value') {
            return $value ? $key : '';
        }

        if (is_array($value)) {
            if ($key == 'style') {
                return 'style="' . $this->arrayValueToStr($value, '') . '"';
            } else {
                return $key . '="' . $this->arrayValueToStr($value) . '"';
            }
        }

        if (!is_null($value)) {
            return $key . '="' . e($value, false) . '"';
        } else {
            return $key;
        }
    }

    public function attribute(): string {
        $result = '';

        foreach ($this->attributes as $attribute => $value) {
            $result .= $this->attributeElement($attribute, $value) . ' ';
        }

        return trim($result);
    }
}
