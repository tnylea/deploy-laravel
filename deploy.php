<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/tnylea/deploy-laravel');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

set('bin/php', '/Users/anthonylea/Library/Application\ Support/Herd/bin/php');
set('bin/composer', '/Users/anthonylea/Library/Application\ Support/Herd/bin/composer');


// Hosts
localhost()
    ->set('deploy_path', '~/Server');


// Custom Artisan Task for Optimize
task('artisan:optimize', function () {
    run('{{bin/php}} {{release_path}}/artisan optimize');
})->desc('Optimize Laravel Application');

// host('deploy-laravel.test')
//     ->set('remote_user', 'deployer')
//     ->set('deploy_path', '~/Sites/deploy-laravel');

// Hooks

after('deploy:failed', 'deploy:unlock');
