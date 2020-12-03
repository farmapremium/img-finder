<?php

declare(strict_types=1);

namespace ImgFinder\Translate;

use ImgFinder\RequestInterface;

interface TranslateInterface
{
    /**
     * @param RequestInterface $request
     * @return RequestInterface
     */
    public function findWord(RequestInterface $request): RequestInterface;
}