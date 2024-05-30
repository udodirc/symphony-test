<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class ProductDto
{
    public function __construct(
        #[Assert\NotBlank]
        public int $product,

        #[Assert\NotBlank]
        public string $taxNumber,

        #[Assert\NotBlank]
        public string $couponCode,
    ) {
    }
}