<?php
namespace ModulesGarden\DomainsReseller\Registrar\DomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\DomainReseller\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class SaveEmailForwarding extends Call
{
    public $action = "domains/:domain/email";
    
    public $type = parent::TYPE_POST;
}