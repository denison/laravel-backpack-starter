<?php declare(strict_types = 1);

// odsl-/var/www/app/Http/Middleware/CheckIfAdmin.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Middleware\CheckIfAdmin
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.4.20-9cae9119461116f0302471581ab8842b9057945c36f1943efa7c35d26c5196f2',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Http\\Middleware\\CheckIfAdmin',
        'filename' => '/var/www/app/Http/Middleware/CheckIfAdmin.php',
      ),
    ),
    'namespace' => 'App\\Http\\Middleware',
    'name' => 'App\\Http\\Middleware\\CheckIfAdmin',
    'shortName' => 'CheckIfAdmin',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 71,
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
      'checkIfUserIsAdmin' => 
      array (
        'name' => 'checkIfUserIsAdmin',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 41,
            'endColumn' => 45,
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
 * Checked that the logged in user is an administrator.
 *
 * --------------
 * VERY IMPORTANT
 * --------------
 * If you have both regular users and admins inside the same table, change
 * the contents of this method to check that the logged in user
 * is an admin, and not a regular user.
 *
 * Additionally, in Laravel 7+, you should change app/Providers/RouteServiceProvider::HOME
 * which defines the route where a logged in user (but not admin) gets redirected
 * when trying to access an admin route. By default it\'s \'/home\' but Backpack
 * does not have a \'/home\' route, use something you\'ve built for your users
 * (again - users, not admins).
 *
 * @param  ?Authenticatable  $user
 * @return bool
 */',
        'startLine' => 32,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Http\\Middleware',
        'declaringClassName' => 'App\\Http\\Middleware\\CheckIfAdmin',
        'implementingClassName' => 'App\\Http\\Middleware\\CheckIfAdmin',
        'currentClassName' => 'App\\Http\\Middleware\\CheckIfAdmin',
        'aliasName' => NULL,
      ),
      'respondToUnauthorizedRequest' => 
      array (
        'name' => 'respondToUnauthorizedRequest',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
            'startColumn' => 51,
            'endColumn' => 58,
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
 * Answer to unauthorized access request.
 *
 * @param  Request  $request
 * @return Response|RedirectResponse
 */',
        'startLine' => 44,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Http\\Middleware',
        'declaringClassName' => 'App\\Http\\Middleware\\CheckIfAdmin',
        'implementingClassName' => 'App\\Http\\Middleware\\CheckIfAdmin',
        'currentClassName' => 'App\\Http\\Middleware\\CheckIfAdmin',
        'aliasName' => NULL,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'next' => 
          array (
            'name' => 'next',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 38,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle an incoming request.
 *
 * @param  Request  $request
 * @return mixed
 */',
        'startLine' => 59,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Middleware',
        'declaringClassName' => 'App\\Http\\Middleware\\CheckIfAdmin',
        'implementingClassName' => 'App\\Http\\Middleware\\CheckIfAdmin',
        'currentClassName' => 'App\\Http\\Middleware\\CheckIfAdmin',
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