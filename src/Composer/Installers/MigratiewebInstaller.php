<?php
namespace Composer\Installers;

class MigratiewebInstaller extends BaseInstaller
{
    protected $locations = array(
      'module' => 'sites/migratieweb/modules/{$name}',
      'theme' => 'sites/migratieweb/themes/{$name}',
    );

}
