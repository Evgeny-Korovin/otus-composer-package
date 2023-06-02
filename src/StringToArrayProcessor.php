<?php

namespace EvgenyKorovin\OtusComposerPackage;

class StringToArrayProcessor
{
    public function getStringFromArray(array $arr): string
    {
        return implode(' ', $arr);
    }
}