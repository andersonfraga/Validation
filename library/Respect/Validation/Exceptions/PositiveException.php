<?php

namespace Respect\Validation\Exceptions;

class PositiveException extends ValidationException
{

    public static $defaultTemplates = array(
        '"%d" is not a positive number',
    );

}