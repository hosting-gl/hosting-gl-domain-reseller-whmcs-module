<?php
namespace ModulesGarden\DomainsReseller\Registrar\DomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\DomainReseller\Core\Call;

/**
 * Description of GetDns
 *
 * @author inbs
 */
class GetDns extends Call
{
    public $action = "domains/:domain/dns";
    
    public $type = parent::TYPE_GET;
}