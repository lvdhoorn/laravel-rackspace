<?php

namespace Invato\Rackspace;

class Rackspace
{
    /** @var \Illuminate\Foundation\Application */
    protected $app;

    /** @var \Invato\Rackspace\Client */
    protected $client;

    /** @var array */
    protected $connections = [];

    /**
     * Rackspace constructor.
     * @param $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        return call_user_func_array([$this->client, $method], $args);
    }

    /**
     * @param null|string $name
     * @return \Invato\Rackspace\Client
     */
    public function connection($name = null)
    {
        $name = $name ?: $this->getDefaultConnection();

        return $this->connections[$name] = $this->get($name);
    }

    /**
     * @return string
     */
    public function getDefaultConnection()
    {
        return $this->app['config']['rackspace.default'];
    }

    /**
     * @param string $name
     * @return \Invato\Rackspace\Client
     */
    protected function get($name)
    {
        return $this->panels[$name] ?? $this->resolve($name);
    }

    /**
     * @param string $name
     * @return \Invato\Rackspace\Client
     */
    protected function resolve($name)
    {
        $config = $this->getConfig($name);

        $this->client = new Client();
        $this->client->setOptions([
            'base_url' => $config['url'],
            'key' => $config['key'],
            'secret' => $config['secret'],
        ]);

        return $this->client;
    }

    /**
     * @param string $name
     * @return array
     */
    protected function getConfig($name)
    {
        return $this->app['config']["rackspace.connections.{$name}"];
    }
}
