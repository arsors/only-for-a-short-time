<?php
namespace Arsors\Api\Security\Authentication;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use GuzzleHttp\Psr7\Utils;
use Neos\Flow\Security\Authentication\EntryPointInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Contract for an authentication entry point
 */
class CustomEntryPointInterface implements EntryPointInterface
{
    /**
     * Sets the options array
     *
     * @param array $options An array of configuration options
     * @return void
     */
    public function setOptions(array $options) {

    }

    /**
     * Returns the options array
     *
     * @return array An array of configuration options
     */
    public function getOptions() {

    }

    /**
     * Starts the authentication. (e.g. redirect to login page or send 401 HTTP header)
     *
     * @param ServerRequestInterface $request The current request
     * @param ResponseInterface $response The current response
     * @return ResponseInterface
     */
    public function startAuthentication(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $uri = "https://www.google.com";
        return $response
            ->withBody(Utils::streamFor(sprintf('<html><head><meta http-equiv="refresh" content="0;url=%s"/></head></html>', htmlentities($uri, ENT_QUOTES, 'utf-8'))))
            ->withStatus(303)
            ->withHeader('Location', $uri);
    }
}
