<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/ShowOperation.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5133ddc5ee13989d03f274333d325cac090128a7bd70c211b370c900e391148f-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Http/Controllers/Operations/ShowOperation.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
    'name' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
    'shortName' => 'ShowOperation',
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
    'endLine' => 158,
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
      'setupShowRoutes' => 
      array (
        'name' => 'setupShowRoutes',
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
            'startColumn' => 40,
            'endColumn' => 47,
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
            'startColumn' => 50,
            'endColumn' => 59,
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
            'startColumn' => 62,
            'endColumn' => 72,
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
 * @param  string  $segment  Name of the current entity (singular). Used as first URL segment.
 * @param  string  $routeName  Prefix of the route name.
 * @param  string  $controller  Name of the current CrudController.
 */',
        'startLine' => 17,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'aliasName' => NULL,
      ),
      'setupShowDefaults' => 
      array (
        'name' => 'setupShowDefaults',
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
        'startLine' => 29,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'aliasName' => NULL,
      ),
      'show' => 
      array (
        'name' => 'show',
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
            'startLine' => 72,
            'endLine' => 72,
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
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \\Illuminate\\Contracts\\View\\View
 */',
        'startLine' => 72,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'aliasName' => NULL,
      ),
      'autoSetupShowOperation' => 
      array (
        'name' => 'autoSetupShowOperation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Default behaviour for the Show Operation, in case none has been
 * provided by including a setupShowOperation() method in the CrudController.
 */',
        'startLine' => 97,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'aliasName' => NULL,
      ),
      'removeColumnsThatDontBelongInsideShowOperation' => 
      array (
        'name' => 'removeColumnsThatDontBelongInsideShowOperation',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 123,
        'endLine' => 157,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Controllers\\Operations\\ShowOperation',
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