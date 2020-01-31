<?php

namespace Invato\Rackspace\Api;

class Customers extends AbstractApi
{
    /**
     * @see https://www.Rackspace.nl/developer/api/crediteuren/add
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($params = [])
    {
        return $this->get('customers', $params);
    }

    public function add($params = []){
        return $this->post('customers', $params);
    }
}