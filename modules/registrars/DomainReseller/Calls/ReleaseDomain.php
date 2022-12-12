<?php
namespace ModulesGarden\DomainsReseller\Registrar\DomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\DomainReseller\Core\Call;

/**
 * Description of TransferDomain
 *
 * @author inbs
 */
class ReleaseDomain extends Call
{
    public $action = "domains/:domain/release";
    
    public $type = parent::TYPE_POST;
}