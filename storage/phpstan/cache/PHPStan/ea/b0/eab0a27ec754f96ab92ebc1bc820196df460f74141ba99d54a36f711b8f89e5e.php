<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/UpdateOperation.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-d8380af15708eaacea5a8e5a53d9715c550ea7481c516719d964ceca6f90a726-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/UpdateOperation.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
    'name' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
    'shortName' => 'UpdateOperation',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 117,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'setupUpdateRoutes' => 
      array (
        'name' => 'setupUpdateRoutes',
        'parameters' => 
        array (
          'segment' => 
          array (
            'name' => 'segment',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 42,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'routeName' => 
          array (
            'name' => 'routeName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 52,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'controller' => 
          array (
            'name' => 'controller',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 64,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define which routes are needed for this operation.
 *
 * @param  string  $name  Name of the current entity (singular). Used as first URL segment.
 * @param  string  $routeName  Prefix of the route name.
 * @param  string  $controller  Name of the current CrudController.
 */',
        'startLine' => 17,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'aliasName' => NULL,
      ),
      'setupUpdateDefaults' => 
      array (
        'name' => 'setupUpdateDefaults',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add the default settings, buttons, etc that this operation needs.
 */',
        'startLine' => 35,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'aliasName' => NULL,
      ),
      'edit' => 
      array (
        'name' => 'edit',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 26,
            'endColumn' => 28,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \\Illuminate\\Contracts\\View\\View
 */',
        'startLine' => 64,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update the specified resource in the database.
 *
 * @return \\Illuminate\\Http\\JsonResponse|\\Illuminate\\Http\\RedirectResponse
 */',
        'startLine' => 93,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\UpdateOperation',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));