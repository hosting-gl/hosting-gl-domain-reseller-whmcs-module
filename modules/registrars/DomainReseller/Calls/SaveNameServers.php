<?php
namespace ModulesGarden\DomainsReseller\Registrar\DomainReseller\Calls;
use ModulesGarden\DomainsReseller\Registrar\DomainReseller\Core\Call;

/**
 * Description of SaveNameServers
 *
 * @author inbs
 */
class SaveNameServers extends Call
{
    public $action = "domains/:domain/nameservers";

    public $type = parent::TYPE_POST;
}