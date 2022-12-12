<?php
namespace ModulesGarden\DomainsReseller\Registrar\DomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\DomainReseller\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class Sync extends Call
{
    public $action = "domains/:domain/sync";
    
    public $type = parent::TYPE_POST;
}