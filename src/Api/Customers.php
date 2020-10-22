<?php

namespace Invato\Rackspace\Api;

class Customers extends AbstractApi
{
    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Customer_(Rest_API)#Index_.28Reseller_Only.29
     *
     * @param  array  $params
     * @return mixed
     */
    public function list(array $params = [])
    {
        return $this->get('customers', $params);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Customer_(Rest_API)#Show_.28Reseller_Only.29
     *
     * @param $customerId
     * @return mixed
     */
    public function show($customerId) {
        return $this->get('customers/' . $customerId);

    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Customer_(Rest_API)#Add.2FEdit_.28Reseller_Only.29
     *
     * @param array $params
     * @return mixed
     */
    public function add(array $params){
        return $this->post('customers', $params);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Customer_(Rest_API)#Add.2FEdit_.28Reseller_Only.29
     *
     * @param $customerId
     * @param array $params
     * @return mixed
     */
    public function edit($customerId, array $params){
        return $this->put('customers/' . $customerId, $params);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Customer_(Rest_API)#Delete_.28Reseller_Only.29
     *
     * @param $customerId
     * @return mixed
     */
    public function delete($customerId){
        return $this->del('customers/' . $customerId);
    }
}
