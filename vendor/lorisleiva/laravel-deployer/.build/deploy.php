<?php

namespace Deployer;

require 'recipe/laravel-deployer.php';

/*
 * Includes
 */

/*
 * Options
 */

set('strategy', 'basic');
set('application', 'Akaunting');
set('repository', '');

/*
 * Hosts and localhost
 */

host('example.com')
    ->set('deploy_path', '/var/www/example.com')
    ->user('root');

/*
 * Strategies
 */

/*
 * Hooks
 */

after('hook:build', 'npm:install');
after('hook:build', 'npm:production');
after('hook:ready', 'artisan:storage:link');
after('hook:ready', 'artisan:view:clear');
after('hook:ready', 'artisan:config:cache');