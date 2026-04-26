<?php declare(strict_types = 1);

// ftm-/var/www/app/Http/Controllers/Admin/UserCrudController.php
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v5-2.3.2',
   'data' => 
  array (
    0 => 
    array (
      'cdbaa49dd6bd18c6848b49cdd32a7609' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '91fdbf305c50d8146bc4ca6815b3d37b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'f4c550d3884a41d9a81bf0797b23ccb0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupCreateRoutes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '35c25f225cde1b526392dd0477314fe2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupCreateDefaults',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'e5ee36a40b40199b5355191cfebd413c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'create',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '550349cb6f4c5135a8a768fc55870d71' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'traitStore',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '99dbd9a2357538da405a8f1ebfc03b67' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'e31bb941d4fe4fcfee003c466f055006' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupDeleteRoutes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '2b49a04cee91aa9676f2983625e5afb9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupDeleteDefaults',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'f2c3150152548bf6a47f101b0a7f94f2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'destroy',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'a9a78ee0ee83a46b3cdc002f5ac14cf2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'App\\Traits\\HasCrudListFilters',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'App\\Traits\\HasCrudListFilters',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'c61b60b90f7ff26a9d69e8add5e645cd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'addCrudListFilter',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'App\\Traits\\HasCrudListFilters',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'App\\Traits\\HasCrudListFilters',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '739d8d9ac1065152be8a86ca87cc9e15' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'applyCrudListFilters',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'App\\Traits\\HasCrudListFilters',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'App\\Traits\\HasCrudListFilters',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '8022771a43b254836578650f32e202be' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'App\\Traits\\HasCrudRoutePermissions',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'App\\Traits\\HasCrudRoutePermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '05fb823f9fb733c95a09002655004f8d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'applyCrudRoutePermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'App\\Traits\\HasCrudRoutePermissions',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'App\\Traits\\HasCrudRoutePermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '1fcc1fd6eb8c15345f201affb9b7a236' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'App\\Traits\\HasCrudUiPermissions',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'App\\Traits\\HasCrudUiPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'f5fe0cbf0874b6c8379f29401253cf91' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'applyCrudUiPermissions',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'App\\Traits\\HasCrudUiPermissions',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'App\\Traits\\HasCrudUiPermissions',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'e36d5e1e297d2bb7cc2a13c5b751e2fa' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'datatablecache' => 'Backpack\\CRUD\\app\\Library\\Support\\DatatableCache',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '925da2b440e4602e0f7c6587f809d8f7' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'datatablecache' => 'Backpack\\CRUD\\app\\Library\\Support\\DatatableCache',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupListRoutes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '0668ca61b2add16fe068a502abb4e8fd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'datatablecache' => 'Backpack\\CRUD\\app\\Library\\Support\\DatatableCache',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupListDefaults',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'cdc8a82bb4e9c6fb2f3a8e5049b1c220' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'datatablecache' => 'Backpack\\CRUD\\app\\Library\\Support\\DatatableCache',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'index',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '1e69c95578a3507c03f75636942b3aa2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'datatablecache' => 'Backpack\\CRUD\\app\\Library\\Support\\DatatableCache',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'search',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '539d7f64e7bace5078812ba3748c302e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'datatablecache' => 'Backpack\\CRUD\\app\\Library\\Support\\DatatableCache',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'showDetailsRow',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '471aacba5f384bdbab1cd673d46fcf1c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '08663d3f345df85f9af1f8f81b89aec5' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupShowRoutes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '15ad9a072185609ccb420776533593be' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupShowDefaults',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'cfa8ff604aeb108ffeb7bb26762cb9c6' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'show',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'fdee42c1dcec10da8c3eb226e927f4bb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'autoSetupShowOperation',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '850580bd738af0c3abbb89644e0892d5' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'removeColumnsThatDontBelongInsideShowOperation',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'fe929970adc30415548af78e2e47fa0e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '6222be2a41c4dea9bf435f677493ad2f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupUpdateRoutes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'c32e1bea92195934c79caab353fb427b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupUpdateDefaults',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '3148c18db66e6dbef180ea6a03e47fa7' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'edit',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      '106f61748be635c56adc24781f2ba2fc' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
         'uses' => 
        array (
          'lifecyclehook' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\Hooks\\Facades\\LifecycleHook',
          'route' => 'Illuminate\\Support\\Facades\\Route',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'traitUpdate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
         'traitData' => 
        array (
          0 => '/var/www/app/Http/Controllers/Admin/UserCrudController.php',
          1 => 'App\\Http\\Controllers\\Admin\\UserCrudController',
          2 => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          3 => NULL,
          4 => NULL,
        ),
      )),
      'b2a559827cde39f525fb72cc43a72308' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => '__construct',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'c180338e5c320bf33f1f35f987977b51' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setup',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '5628372704a1ae94b64dfdb85edd6b8e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupListOperation',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'e6cece0d9ef1c4123d47f925a186ab09' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupCreateOperation',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'a983cf7aa01860bcd9654c0222809467' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupUpdateOperation',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'be7d2e075f8441e7187ccc62d563776b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupShowOperation',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '1cc63b510cca97e520c02f4c496f691f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'store',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '34fe37a237bc34796247bb03322c96cc' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'update',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'f72621dc01f41bc44e4c66195d73b0bf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'addUserFields',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'f44c081b6926a380acd27a2ef033d5a0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupUserFormData',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      'ab978689f64cda431a8d5b9b4ae9be00' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'setupUserListFilters',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '30f770cf0c7dfd8462852fbee86a1460' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'applyUserVisibilityScope',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '00a6262114cb94e3a98958fd79559414' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Http\\Controllers\\Admin',
         'uses' => 
        array (
          'crudlisticon' => 'App\\Enums\\CrudListIcon',
          'userservice' => 'App\\Services\\UserService',
          'hascrudlistfilters' => 'App\\Traits\\HasCrudListFilters',
          'hascrudroutepermissions' => 'App\\Traits\\HasCrudRoutePermissions',
          'hascruduipermissions' => 'App\\Traits\\HasCrudUiPermissions',
          'crudcontroller' => 'Backpack\\CRUD\\app\\Http\\Controllers\\CrudController',
          'createoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\CreateOperation',
          'deleteoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\DeleteOperation',
          'listoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ListOperation',
          'showoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
          'updateoperation' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
          'crud' => 'Backpack\\CRUD\\app\\Library\\CrudPanel\\CrudPanelFacade',
          'storerequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserStoreCrudRequest',
          'updaterequest' => 'Backpack\\PermissionManager\\app\\Http\\Requests\\UserUpdateCrudRequest',
          'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
        ),
         'className' => 'App\\Http\\Controllers\\Admin\\UserCrudController',
         'functionName' => 'userService',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
    ),
    1 => 
    array (
      '/var/www/app/Http/Controllers/Admin/UserCrudController.php' => '92d42f0ab5cb9933e0fa9581756d0974ed2ad7fec9b3a06e7fa125fc7f606c99',
      '/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/CreateOperation.php' => 'd2865f890e3d2f09aa2b3923d936c88da011494212e95b7371b8a9db8a41d0a5',
      '/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/DeleteOperation.php' => 'df438db9d4ac49edd028a99788dbe53c62db7c7ffab9d601dac0f9fecf383862',
      '/var/www/app/Traits/HasCrudListFilters.php' => '31cd6d3f3736710d135321ec3da23eaeae0b4325e3d23ca17997a101df2e9550',
      '/var/www/app/Traits/HasCrudRoutePermissions.php' => '285fd02ce3bb2eb0fe1318d09fae9b695316abdc21299de0706eb94abb729144',
      '/var/www/app/Traits/HasCrudUiPermissions.php' => '2c47bd05bb818feb305cfacb74021c3e32bc1126261d3f9ad6e77765b8004006',
      '/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/ListOperation.php' => '621b2964653de5771c02f22f438b2c245c8190dd4f4117968eb828a1d8616d3c',
      '/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/ShowOperation.php' => '5133ddc5ee13989d03f274333d325cac090128a7bd70c211b370c900e391148f',
      '/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/UpdateOperation.php' => 'd8380af15708eaacea5a8e5a53d9715c550ea7481c516719d964ceca6f90a726',
    ),
  ),
));