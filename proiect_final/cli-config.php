<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'functions.php';
return ConsoleRunner::createHelperSet($entityManager);