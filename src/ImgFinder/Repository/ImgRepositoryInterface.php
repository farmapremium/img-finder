<?php

declare(strict_types=1);

namespace ImgFinder\Repository;

use ImgFinder\RequestInterface;
use ImgFinder\ResponseInterface;

interface ImgRepositoryInterface
{
    public function getName(): string;

    public function findImages(RequestInterface $request): ResponseInterface;
}
