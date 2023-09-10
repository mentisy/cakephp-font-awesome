<?php
declare(strict_types=1);

// Load in some default App configuration, so tests don't fail
use Cake\Core\Configure;

Configure::write('App.namespace', 'App');
Configure::write('App.encoding', 'UTF-8');
Configure::write('App.jsBaseUrl', 'js/');
