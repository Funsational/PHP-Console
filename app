#!/usr/bin/env php
<?php

require_once __DIR__.'/bootstrap.php';

use Console\Application;
use Symfony\Component\Console\Input\ArgvInput;

$input = new ArgvInput();
$env = $input->getParameterOption(array('--env', '-e'), 'dev');
$debug = $input->hasParameterOption(array('--debug', '-d'));

$application = new Application();
$application->run();
