<?php
/**
 * Configuration file generated by ZF Apigility Admin
 *
 * The previous config file has been stored in ./config/application.config.old
 */
return array(
    'modules' => array(
        'ZfcBase',
        'ZfcAdmin',
        'ZfcUser',
        'ScnSocialAuth',
        'BjyAuthorize',
        'Auth',
        'ZfcUserAdmin',
        'MtMail',
        'HtUserRegistration',
        'AssetManager',
        'Developer',
        'ZendDeveloperTools',
        'Album',
        'Checklist',
        'StatusLib',
        'ZF\\Apigility',
        'ZF\\Apigility\\Provider',
        'ZF\\Apigility\\Documentation',
        'ZF\\Apigility\\Documentation\\Swagger',
        'ZF\\ApiProblem',
        'ZF\\MvcAuth',
        'ZF\\OAuth2',
        'ZF\\Hal',
        'ZF\\ContentNegotiation',
        'ZF\\ContentValidation',
        'ZF\\Rest',
        'ZF\\Rpc',
        'ZF\\Versioning',
        'ZF\\DevelopmentMode',
        'Status',
        'Music',
        'Application',
        'cinema',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
    ),
);
