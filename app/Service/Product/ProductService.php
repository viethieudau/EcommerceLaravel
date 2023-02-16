<?php

namespace App\Service\Product;

use App\Service\BaseService;

class ProductService extends BaseService implements ProductServiceInterface
{
    public $respository;
    public function __construct(ProductServiceInterface $productRespository)
    {
        $this->repository = $productRespository;
    }
    public function find($id)
    {
        $product = $this->repository->find($id);
        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if ($countRating != 0) {
            $avgRating = $sumRating / $countRating;
        }
        $product->avgRating = $avgRating;
        return $product;
    }
}
