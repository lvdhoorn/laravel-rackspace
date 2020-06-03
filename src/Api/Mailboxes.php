<?php

namespace Invato\Rackspace\Api;

class Mailboxes extends AbstractApi
{
    /**
     * @see https://www.Rackspace.nl/developer/api/crediteuren/add
     * @param $params
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function list($customerId, $domainName, $params = [])
    {
        return $this->get('customers/' . $customerId . '/domains/' . $domainName . '/rs/mailboxes', $params);
    }

    public function show($customerId, $domainName, $mailboxName)
    {
        return $this->get('customers/' . $customerId . '/domains/' . $domainName . '/rs/mailboxes/' . $mailboxName, []);
    }

    public function add($params = []){
        return $this->post('mailboxes', $params);
    }
}