<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Security\Admin\SessionRenewer' shared autowired service.

return $this->services['PrestaShopBundle\\Security\\Admin\\SessionRenewer'] = new \PrestaShopBundle\Security\Admin\SessionRenewer(${($_ = isset($this->services['security.csrf.token_storage']) ? $this->services['security.csrf.token_storage'] : $this->getSecurity_Csrf_TokenStorageService()) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});
