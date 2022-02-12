<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasClassicSetter
{
    /**
     * Determine if a classic setter method exists for an attribute.
     *
     * @param  string  $key
     * @return bool
     */
    public function hasSetMutator($key)
    {
        return method_exists($this, 'set'.Str::studly($key));
    }

    /**
     * Set the value of an attribute using its classic setter.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    protected function setMutatedAttributeValue($key, $value)
    {
        return $this->{'set'.Str::studly($key)}($value);
    }
}