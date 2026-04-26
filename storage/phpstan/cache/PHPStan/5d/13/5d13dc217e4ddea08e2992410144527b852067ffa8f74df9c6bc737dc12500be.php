<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../prologue/alerts/src/AlertsMessageBag.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Prologue\Alerts\AlertsMessageBag
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-48742f0c6ada0054ea47063835ca79e653baa3ca81e8d57f5032f574b1908b34-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Prologue\\Alerts\\AlertsMessageBag',
        'filename' => '/var/www/vendor/composer/../prologue/alerts/src/AlertsMessageBag.php',
      ),
    ),
    'namespace' => 'Prologue\\Alerts',
    'name' => 'Prologue\\Alerts\\AlertsMessageBag',
    'shortName' => 'AlertsMessageBag',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 220,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\MessageBag',
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
      'session' => 
      array (
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'name' => 'session',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var \\Illuminate\\Session\\Store
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 14,
        'endLine' => 14,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'config' => 
      array (
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'name' => 'config',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var \\Illuminate\\Config\\Repository
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 5,
        'endColumn' => 22,
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
          'session' => 
          array (
            'name' => 'session',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Session\\Store',
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
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Config\\Repository',
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
            'startColumn' => 51,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'messages' => 
          array (
            'name' => 'messages',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 27,
                'endLine' => 27,
                'startTokenPos' => 82,
                'startFilePos' => 668,
                'endTokenPos' => 83,
                'endFilePos' => 669,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
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
            'startColumn' => 67,
            'endColumn' => 86,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param \\Illuminate\\Session\\Store $session
 * @param \\Illuminate\\Config\\Repository $config
 * @param array $messages
 * @return \\Prologue\\Alerts\\AlertsMessageBag
 */',
        'startLine' => 27,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Prologue\\Alerts',
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'currentClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'aliasName' => NULL,
      ),
      'transform' => 
      array (
        'name' => 'transform',
        'parameters' => 
        array (
          'messages' => 
          array (
            'name' => 'messages',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 34,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 45,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'messageKey' => 
          array (
            'name' => 'messageKey',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 54,
            'endColumn' => 64,
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
 * Format an array of messages.
 *
 * @param array $messages
 * @param string $format
 * @param string $messageKey
 * @return array
 */',
        'startLine' => 52,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Prologue\\Alerts',
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'currentClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'aliasName' => NULL,
      ),
      'flash' => 
      array (
        'name' => 'flash',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Store the messages in the current session.
 *
 * @return \\Prologue\\Alerts\\AlertsMessageBag
 */',
        'startLine' => 81,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Prologue\\Alerts',
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'currentClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'aliasName' => NULL,
      ),
      'flush' => 
      array (
        'name' => 'flush',
        'parameters' => 
        array (
          'withSession' => 
          array (
            'name' => 'withSession',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 95,
                'endLine' => 95,
                'startTokenPos' => 381,
                'startFilePos' => 2610,
                'endTokenPos' => 381,
                'endFilePos' => 2613,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 95,
            'endLine' => 95,
            'startColumn' => 27,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Deletes all messages.
 *
 * @param bool $withSession
 *
 * @return \\Prologue\\Alerts\\AlertsMessageBag
 */',
        'startLine' => 95,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Prologue\\Alerts',
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'currentClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'aliasName' => NULL,
      ),
      'has' => 
      array (
        'name' => 'has',
        'parameters' => 
        array (
          'level' => 
          array (
            'name' => 'level',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 438,
                'startFilePos' => 2971,
                'endTokenPos' => 438,
                'endFilePos' => 2974,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 25,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks to see if any messages exist.
 *
 * @param null $key A specific level you wish to check for.
 *
 * @return bool
 */',
        'startLine' => 113,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Prologue\\Alerts',
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'currentClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
        'parameters' => 
        array (
          'level' => 
          array (
            'name' => 'level',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 134,
                'endLine' => 134,
                'startTokenPos' => 530,
                'startFilePos' => 3465,
                'endTokenPos' => 530,
                'endFilePos' => 3468,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 134,
            'endLine' => 134,
            'startColumn' => 27,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the number of messages in the message bag.
 *
 * @param null $level A specific level name you wish to count.
 *
 * @return int
 */',
        'startLine' => 134,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Prologue\\Alerts',
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'currentClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'aliasName' => NULL,
      ),
      'getLevels' => 
      array (
        'name' => 'getLevels',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the alert levels from the config.
 *
 * @return array
 */',
        'startLine' => 158,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Prologue\\Alerts',
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'currentClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'aliasName' => NULL,
      ),
      'getSessionKey' => 
      array (
        'name' => 'getSessionKey',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the session key from the config.
 *
 * @return string
 */',
        'startLine' => 168,
        'endLine' => 171,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Prologue\\Alerts',
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'currentClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'aliasName' => NULL,
      ),
      'getSession' => 
      array (
        'name' => 'getSession',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the Illuminate Session Store.
 *
 * @return \\Illuminate\\Session\\Store
 */',
        'startLine' => 178,
        'endLine' => 181,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Prologue\\Alerts',
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'currentClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'aliasName' => NULL,
      ),
      'getConfig' => 
      array (
        'name' => 'getConfig',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the Illuminate Config Repository.
 *
 * @return \\Illuminate\\Config\\Repository
 */',
        'startLine' => 188,
        'endLine' => 191,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Prologue\\Alerts',
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'currentClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 37,
            'endColumn' => 47,
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
 * Dynamically handle alert additions.
 *
 * @param string $method
 * @param array $parameters
 * @return mixed
 * @throws \\BadMethodCallException
 */',
        'startLine' => 201,
        'endLine' => 219,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Prologue\\Alerts',
        'declaringClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'implementingClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
        'currentClassName' => 'Prologue\\Alerts\\AlertsMessageBag',
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