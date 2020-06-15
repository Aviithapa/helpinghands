<?php

namespace App\Traits;
trait ModelHelpers
{
    /**
     * Returns null if value is an empty string, the value otherwise.
     *
     * @param $value
     * @return mixed
     */
    public function emptyToNull($value)
    {
        return $value !== '' ? $value : null;
    }

    /**
     * Returns zero if value is an empty string, the value otherwise.
     *
     * @param $value
     * @return mixed
     */
    public function nullToZero($value)
    {
        return $value !== null ? $value : 0;
    }
}
