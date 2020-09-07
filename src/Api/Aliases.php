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
     * @param $mailboxName
     * @param $alias
     * @return mixed
     */
    public function show($customerId, $domainName, $mailboxName, $alias) {
        return $this->get('customers/' . $customerId . '/domains/' . $domainName . '/rs/mailboxes/' . $mailboxName . '/alias/', $alias);

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
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Customer_(Rest_API)#Add.2FEdit_.28Reseller_Only.29
     *
     * @param $customerId
     * @param $domainName
     * @param array $params
     * @return mixed
     */
    public function delete($customerId, $domainName, $params = []){
        return $this->delete('customers/' . $customerId . '/domains/' . $domainName . '/rs/aliases/' . $alias, $params);
    }
}