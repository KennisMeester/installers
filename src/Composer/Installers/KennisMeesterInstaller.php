<?php
namespace Composer\Installers;

class KennisMeesterInstaller extends BaseInstaller
{
    protected $locations = array(
      'module' => 'modules/custom/kennismeester/{$name}',
    );

}
