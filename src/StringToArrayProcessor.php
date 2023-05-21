<?php

namespace EvgenyKorovin\OtusComposerPackage;

class StringToArrayProcessor
{
    public function getStringToArray(array $arr): string
    {
        return implode(' ', $arr);
    }
}