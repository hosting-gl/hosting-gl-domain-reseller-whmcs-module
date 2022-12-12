<?php
namespace ModulesGarden\DomainsReseller\Registrar\DomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\DomainReseller\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class SaveRegistrarLock extends Call
{
    public $action = "domains/:domain/lock";
    
    public $type = parent::TYPE_POST;
}