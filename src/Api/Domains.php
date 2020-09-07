<?php

namespace Invato\Rackspace\Api;

class Domains extends AbstractApi
{
    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Domain_(Rest_API)#Index
     *
     * @param $customerId
     * @return mixed
     */
    public function list($customerId)
    {
        return $this->get('customers/' . $customerId . '/domains');
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Domain_(Rest_API)#Show
     *
     * @param $customerId
     * @param $domainName
     * @param array $params
     * @return mixed
     */
    public function show($customerId, $domainName) {
        return $this->get('customers/' . $customerId . '/domains/' . $domainName);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Domain_(Rest_API)#Add.2FEdit_.28Reseller_Only.29
     *
     * @param $customerId
     * @param $domainName
     * @param array $params
     * @return mixed
     */
    public function add($customerId, $domainName, array $params){
        return $this->post('customers/' . $customerId . '/domains/' . $domainName, $params);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Domain_(Rest_API)#Add.2FEdit_.28Reseller_Only.29
     *
     * @param $customerId
     * @param $domainName
     * @param array $params
     * @return mixed
     */
    public function edit($customerId, $domainName, array $params){
        return $this->put('customers/' . $customerId . '/domains/' . $domainName, $params);
    }
}