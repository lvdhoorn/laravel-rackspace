<?php

namespace Invato\Rackspace\HttpClient;

class HttpClient
{
    /** @var \GuzzleHttp\Client */
    protected $client;

    /** @var array */
    protected $options = [];

    /**
     * @return \GuzzleHttp\Client
     */
    public function getClient()
    {
        if (!isset($this->client)) {

            $timeStamp = date('YmdHis');

            $dataToSign = $this->getOptions()['key'] . 'PHP' . $timeStamp . $this->getOptions()['secret'];

            $signature = base64_encode(sha1($dataToSign, true));

            $this->client = new \GuzzleHttp\Client([
                'base_uri'  => $this->getOptions()['base_url'],
                'headers'   => [
                    'User-Agent' => 'PHP',
                    'X-Api-Signature' => $this->getOptions()['key'] .':'. $timeStamp . ':' . $signature,
                    'Accept' => 'application/json'
                ]
            ]);

            return $this->client;
        }

        return $this->client;
    }

    /**
     * @param $client
     * @return \GuzzleHttp\Client
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this->client;
    }

    /**
     * @param $body
     * @param $method
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request($method, $action, $data)
    {
        $timeStamp = date('YmdHis');

        $dataToSign = $this->getOptions()['key'] . 'PHP' . $timeStamp . $this->getOptions()['secret'];

        $response = $this->getClient()->request(
            $method,
            $action,
            [
                'allow_redirects'   => true,
                'protocols'         => ['https'],
                'query'             => $data,
                'form_params'       => $data
            ]
        );

        return json_decode((string)$response->getBody(), true);
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = array_merge($this->options, $options);
    }
}