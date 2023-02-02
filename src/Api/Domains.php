<?php

namespace Invato\Rackspace\Api;

class Domains extends AbstractApi
{
    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Domain_(Rest_API)#Index
     *
     * @param $customerId
     * @param $params
     * @return mixed
     */
    public function list($customerId, $params = [])
    {
        return $this->get('v1/customers/' . $customerId . '/domains', $params);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Domain_(Rest_API)#Show
     *
     * @param $customerId
     * @param $domainName
     * @return mixed
     */
    public function show($customerId, $domainName) {
        return $this->get('v1/customers/' . $customerId . '/domains/' . $domainName);
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
        return $this->post('v1/customers/' . $customerId . '/domains/' . $domainName, $params);
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
        return $this->put('v1/customers/' . $customerId . '/domains/' . $domainName, $params);
    }


    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Domain_(Rest_API)#Move_.28Reseller_Only.29
     *
     * @param $customerId
     * @param $domainName
     * @return mixed
     */
    public function move($customerId, $domainName){
        return $this->put('v1/customers/' . $customerId . '/domains/' . $domainName, ['moveDomain' => 'true']);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Domain_(Rest_API)#Delete_.28Reseller_Only.29
     *
     * @param $customerId
     * @param $domainName
     * @return mixed
     */
    public function delete($customerId, $domainName) {
        return $this->del('v1/customers/' . $customerId . '/domains/' . $domainName);
    }
}
