<?php

namespace App\Service;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Exception
{
    public function notFoundException(array $checkItems): void
    {
        foreach ($checkItems as $item => $entity){
            if (!$entity) {
                throw new NotFoundHttpException('No '.$item.' found');
            }
        }
    }
}