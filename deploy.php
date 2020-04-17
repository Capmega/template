<?php
namespace Deployer;

require 'vendor/capmega/base/deploy.php';

// set default stage
set('default_stage', 'production');

// Project name
set('application', 'sdk_template');

// Project repository
set('repository', 'git@github.com:capmega/template.git');

// Hosts
host('capmega.com')
    ->stage('production')
    // ->set('user', 'www-data')
    // ->user('USER')
    ->port(22)
    ->set('deploy_path', '/var/www/html/{{application}}');
