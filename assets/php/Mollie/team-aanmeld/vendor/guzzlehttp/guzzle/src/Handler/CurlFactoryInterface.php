<?php

namespace _PhpScoper5bf6a941d2ec8\GuzzleHttp\Handler;

use _PhpScoper5bf6a941d2ec8\Psr\Http\Message\RequestInterface;
interface CurlFactoryInterface
{
    /**
     * Creates a cURL handle resource.
     *
     * @param RequestInterface $request Request
     * @param array            $options Transfer options
     *
     * @return EasyHandle
     * @throws \RuntimeException when an option cannot be applied
     */
    public function create(\_PhpScoper5bf6a941d2ec8\Psr\Http\Message\RequestInterface $request, array $options);
    /**
     * Release an easy handle, allowing it to be reused or closed.
     *
     * This function must call unset on the easy handle's "handle" property.
     *
     * @param EasyHandle $easy
     */
    public function release(\_PhpScoper5bf6a941d2ec8\GuzzleHttp\Handler\EasyHandle $easy);
}
