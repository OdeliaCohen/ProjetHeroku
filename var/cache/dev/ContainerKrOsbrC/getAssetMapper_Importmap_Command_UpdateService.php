<?php

namespace ContainerKrOsbrC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_Command_UpdateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.command.update' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Command\ImportMapUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/Command/VersionProblemCommandTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/Command/ImportMapUpdateCommand.php';

        $container->privates['asset_mapper.importmap.command.update'] = $instance = new \Symfony\Component\AssetMapper\Command\ImportMapUpdateCommand(($container->privates['asset_mapper.importmap.manager'] ?? $container->load('getAssetMapper_Importmap_ManagerService')), ($container->privates['asset_mapper.importmap.version_checker'] ?? $container->load('getAssetMapper_Importmap_VersionCheckerService')));

        $instance->setName('importmap:update');
        $instance->setDescription('Update JavaScript packages to their latest versions');

        return $instance;
    }
}
