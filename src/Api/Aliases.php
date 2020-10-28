<?php

namespace Invato\Rackspace\Api;

class Aliases extends AbstractApi
{
    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Rackspace_Alias(Rest_API)#Index
     *
     * @param $customerId
     * @param $domainName
     * @param array $params
     * @return mixed
     */
    public function list($customerId, $domainName, $params = [])
    {
        return $this->get('customers/' . $customerId . '/domains/' . $domainName . '/rs/aliases/', $params);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Rackspace_Alias(Rest_API)#Show
     *
     * @param $customerId
     * @param $domainName
     * @param $alias
     * @return mixed
     */
    public function show($customerId, $domainName, $alias) {
        return $this->get('customers/' . $customerId . '/domains/' . $domainName . '/rs/aliases/'. $alias);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Rackspace_Alias(Rest_API)#Add
     *
     * @param $customerId
     * @param $domainName
     * @param $alias
     * @param array $params
     * @return mixed
     */
    public function add($customerId, $domainName, $alias, array $params){
        return $this->post('customers/' . $customerId . '/domains/' . $domainName . '/rs/aliases/' . $alias, $params);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Rackspace_Alias(Rest_API)#Bulk_Modify_Alias_List
     *
     * @param $customerId
     * @param $domainName
     * @param $alias
     * @param array $params
     * @return mixed
     */
    public function bulkModify($customerId, $domainName, $alias, array $params){
        return $this->put('customers/' . $customerId . '/domains/' . $domainName . '/rs/aliases/' . $alias, $params);
    }


    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Rackspace_Alias(Rest_API)#Delete
     *
     * @param $customerId
     * @param $domainName
     * @param $alias
     * @return mixed
     */
    public function delete($customerId, $domainName, $alias){
        return $this->del('customers/' . $customerId . '/domains/' . $domainName . '/rs/aliases/' . $alias);
    }
}
