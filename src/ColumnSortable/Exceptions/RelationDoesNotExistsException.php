<?php

namespace Kyslik\ColumnSortable\Exceptions;

use Exception;

class RelationDoesNotExistsException extends Exception
{
    public function __construct($relationName, $code = 0, Exception $previous = null)
    {
        $message = 'Sorry, relation \''. $relationName . '\' does not exist. Define it in your model.';
        parent::__construct($message, $code, $previous);
    }
}
