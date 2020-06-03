<?php

namespace Invato\Rackspace\Api;

class Domains extends AbstractApi
{
    /**
     * @see https://www.Rackspace.nl/developer/api/crediteuren/add
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($customerId, $params = [])
    {
        return $this->get('customers/' . $customerId . '/domains', $params);
    }

    public function add($params = []){
        return $this->post('mailboxes', $params);
    }
}