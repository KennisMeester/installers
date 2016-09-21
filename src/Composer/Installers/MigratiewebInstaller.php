<?php
namespace Composer\Installers;

class MigratiewebInstaller extends BaseInstaller
{
    protected $locations = array(
      'module' => 'modules/custom/migratieweb/{$name}',
    );

}
