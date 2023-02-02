<?php

namespace Invato\Rackspace\Api;

class DKIM extends AbstractApi
{
    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=DKIM_(Rest_API)#Get_Domain.27s_Current_DKIM_Status
     *
     * @param $customerId
     * @param $domainName
     * @return mixed
     */
    public function status($customerId, $domainName) {
        return $this->get('v2/customers/' . $customerId . '/domains/' . $domainName . '/dkim');
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=DKIM_(Rest_API)#Enable_DKIM_or_Rotate_Keys
     *
     * @param $customerId
     * @param $domainName
     * @param array $params
     * @return mixed
     */
    public function enableOrRotateKeys($customerId, $domainName){
        return $this->post('v2/customers/' . $customerId . '/domains/' . $domainName . '/dkim', []);
    }

    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=DKIM_(Rest_API)#Disable_DKIM_on_a_Domain
     *
     * @param $customerId
     * @param $domainName
     * @param array $params
     * @return mixed
     */
    public function disable($customerId, $domainName){
        return $this->del('v2/customers/' . $customerId . '/domains/' . $domainName . '/dkim/verification');
    }


    /**
     * http://api-wiki.apps.rackspace.com/api-wiki/index.php?title=DKIM_(Rest_API)#Complete_and_Verify_Enabling_DKIM_or_Rotating_Domain_Keys
     *
     * @param $customerId
     * @param $domainName
     * @return mixed
     */
    public function verify($customerId, $domainName){
        return $this->post('v2/customers/' . $customerId . '/domains/' . $domainName . '/dkim');
    }
}
