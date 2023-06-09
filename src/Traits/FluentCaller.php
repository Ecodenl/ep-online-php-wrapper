<?php

namespace Ecodenl\EpOnlinePhpWrapper\Traits;

trait FluentCaller {

    public static function init()
    {
        return new static(...func_get_args());
    }
}
