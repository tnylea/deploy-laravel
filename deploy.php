<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/tnylea/deploy-laravel');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('deploy-laravel.test')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/Sites/deploy-laravel');

// Hooks

after('deploy:failed', 'deploy:unlock');
