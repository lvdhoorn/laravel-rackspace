<?php

namespace Invato\Rackspace\Api;

class ExchangeMailboxes extends AbstractApi
{
    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Exchange_Mailbox_(Rest_API)#Index
     *
     * @param $customerId
     * @param $domainName
     * @return mixed
     */
    public function list($customerId, $domainName)
    {
        return $this->get('customers/' . $customerId . '/domains/' . $domainName . '/ex/mailboxes');
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Exchange_Mailbox_(Rest_API)#Show
     *
     * @param $customerId
     * @param $domainName
     * @param $mailboxName
     * @return mixed
     */
    public function show($customerId, $domainName, $mailboxName)
    {
        return $this->get('customers/' . $customerId . '/domains/' . $domainName . '/ex/mailboxes/' . $mailboxName);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Exchange_Mailbox_(Rest_API)#Add.2FEdit
     *
     * @param $customerId
     * @param $domainName
     * @param $mailboxName
     * @param array $params
     * @return mixed
     */
    public function add($customerId, $domainName, $mailboxName, array $params){
        return $this->post('customers/' . $customerId . '/domains/' . $domainName . '/ex/mailboxes/' . $mailboxName, $params);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Exchange_Mailbox_(Rest_API)#Add.2FEdit
     *
     * @param $customerId
     * @param $domainName
     * @param $mailboxName
     * @param array $params
     * @return mixed
     */
    public function edit($customerId, $domainName, $mailboxName, array $params){
        return $this->put('customers/' . $customerId . '/domains/' . $domainName . '/ex/mailboxes/' . $mailboxName, $params);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=Exchange_Mailbox_(Rest_API)#Delete
     *
     * @param $customerId
     * @param $domainName
     * @param $mailboxName
     * @return mixed
     */
    public function delete($customerId, $domainName, $mailboxName){
        return $this->del('customers/' . $customerId . '/domains/' . $domainName . '/ex/mailboxes/' . $mailboxName);
    }
}
