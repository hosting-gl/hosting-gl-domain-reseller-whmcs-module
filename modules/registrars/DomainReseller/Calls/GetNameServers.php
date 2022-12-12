<?php
namespace ModulesGarden\DomainsReseller\Registrar\DomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\DomainReseller\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class GetNameServers extends Call
{
    public $action = "domains/:domain/nameservers";
    
    public $type = parent::TYPE_GET;
}