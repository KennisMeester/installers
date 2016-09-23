<?php
namespace Composer\Installers;

class Know2HowInstaller extends BaseInstaller
{

    protected $locations = array(
        'module' => 'modules/custom/know2how/{$name}',
        'profile' => 'profiles/custom/{$name}',
    );

}
