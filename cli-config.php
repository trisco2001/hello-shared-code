<?php
/**
 * Created by IntelliJ IDEA.
 * User: tristanl
 * Date: 9/6/15
 * Time: 7:21 AM
 */
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Tristan\SharedCode;

// replace with file to your own project bootstrap
require_once 'bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = SharedCode::GetEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
