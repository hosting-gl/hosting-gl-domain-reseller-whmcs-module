<?php
namespace ModulesGarden\DomainsReseller\Registrar\DomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\DomainReseller\Core\Call;

/**
 * Description of RenewDomain
 *
 * @author inbs
 */
class RenewDomain extends Call
{
    public $action = "order/domains/renew";
    
    public $type = parent::TYPE_POST;
}