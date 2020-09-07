<?php

namespace Invato\Rackspace\Api;

use Invato\Rackspace\Client;

abstract class AbstractApi implements ApiInterface
{
    /** @var \Invato\Rackspace\Client */
    public $client;

    /**
     * AbstractApi constructor.
     * @param \Invato\Rackspace\Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function get($action, $parameters = [])
    {
        return $this->client->getHttpClient()->request('GET', $action, $parameters);
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function post($action, $parameters)
    {
        return $this->client->getHttpClient()->request('POST', $action, $parameters);
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function put($action, $parameters)
    {
        return $this->client->getHttpClient()->request('PUT', $action, $parameters);
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function delete($action, $parameters)
    {
        return $this->client->getHttpClient()->request('DELETE', $action, $parameters);
    }
}