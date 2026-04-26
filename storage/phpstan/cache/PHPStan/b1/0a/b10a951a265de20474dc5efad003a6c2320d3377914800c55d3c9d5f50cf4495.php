<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../backpack/crud/src/app/Http/Middleware/AuthenticateSession.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Backpack\CRUD\app\Http\Middleware\AuthenticateSession
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-7078d4fca7646623b180be0cc290164bc26afced6f78b402c0d6a6d6e5b9c802-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'filename' => '/var/www/vendor/composer/../backpack/crud/src/app/Http/Middleware/AuthenticateSession.php',
      ),
    ),
    'namespace' => 'Backpack\\CRUD\\app\\Http\\Middleware',
    'name' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
    'shortName' => 'AuthenticateSession',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 114,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
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
      'auth' => 
      array (
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'name' => 'auth',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The authentication factory implementation.
 *
 * @var \\Illuminate\\Contracts\\Auth\\Factory
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'user' => 
      array (
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'name' => 'user',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'auth' => 
          array (
            'name' => 'auth',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\Factory',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 33,
            'endColumn' => 49,
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
 * Create a new middleware instance.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Factory  $auth
 * @return void
 */',
        'startLine' => 27,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Middleware',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
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
            'startLine' => 40,
            'endLine' => 40,
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
            'startLine' => 40,
            'endLine' => 40,
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
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Closure  $next
 * @return mixed
 */',
        'startLine' => 40,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Middleware',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'aliasName' => NULL,
      ),
      'storePasswordHashInSession' => 
      array (
        'name' => 'storePasswordHashInSession',
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
            'startLine' => 75,
            'endLine' => 75,
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
 * Store the user\'s current password hash in the session.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return void
 */',
        'startLine' => 75,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Middleware',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'aliasName' => NULL,
      ),
      'logout' => 
      array (
        'name' => 'logout',
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
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 31,
            'endColumn' => 38,
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
 * Log the user out of the application.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return void
 *
 * @throws \\Illuminate\\Auth\\AuthenticationException
 */',
        'startLine' => 94,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Middleware',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'aliasName' => NULL,
      ),
      'guard' => 
      array (
        'name' => 'guard',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the guard instance that should be used by the middleware.
 *
 * @return \\Illuminate\\Contracts\\Auth\\Factory|\\Illuminate\\Contracts\\Auth\\Guard
 */',
        'startLine' => 110,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Backpack\\CRUD\\app\\Http\\Middleware',
        'declaringClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'implementingClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
        'currentClassName' => 'Backpack\\CRUD\\app\\Http\\Middleware\\AuthenticateSession',
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