<?php
/**
 * Created by IntelliJ IDEA.
 * User: tristanl
 * Date: 9/6/15
 * Time: 7:22 AM
 */

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once "vendor/autoload.php";

abstract class SharedCode
{

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public static function GetEntityManager()
    {
        $paths = array(__DIR__ . "/Entity");
        $isDevMode = true;

        // the connection configuration
        $dbParams = array(
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'password' => '',
            'dbname' => 'hellosharedcode',
        );

        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
        $entityManager = EntityManager::create($dbParams, $config);
        return $entityManager;
    }
}
