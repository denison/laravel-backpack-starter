<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../spatie/image-optimizer/src/Optimizer.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\ImageOptimizer\Optimizer
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-cc31774e2994ff81c9cb137db4ef96061ca30b65d0300a31e9c55c731b176384-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\ImageOptimizer\\Optimizer',
        'filename' => '/var/www/vendor/composer/../spatie/image-optimizer/src/Optimizer.php',
      ),
    ),
    'namespace' => 'Spatie\\ImageOptimizer',
    'name' => 'Spatie\\ImageOptimizer\\Optimizer',
    'shortName' => 'Optimizer',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 5,
    'endLine' => 54,
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
      'binaryName' => 
      array (
        'name' => 'binaryName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the name of the binary to be executed.
 *
 * @return string
 */',
        'startLine' => 12,
        'endLine' => 12,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\ImageOptimizer',
        'declaringClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'implementingClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'currentClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'aliasName' => NULL,
      ),
      'canHandle' => 
      array (
        'name' => 'canHandle',
        'parameters' => 
        array (
          'image' => 
          array (
            'name' => 'image',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Spatie\\ImageOptimizer\\Image',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 31,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the given image can be handled by the optimizer.
 *
 * @param \\Spatie\\ImageOptimizer\\Image $image
 *
 * @return bool
 */',
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\ImageOptimizer',
        'declaringClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'implementingClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'currentClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'aliasName' => NULL,
      ),
      'setImagePath' => 
      array (
        'name' => 'setImagePath',
        'parameters' => 
        array (
          'imagePath' => 
          array (
            'name' => 'imagePath',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 34,
            'endColumn' => 50,
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
 * Set the path to the image that should be optimized.
 *
 * @param string $imagePath
 *
 * @return $this
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\ImageOptimizer',
        'declaringClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'implementingClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'currentClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'aliasName' => NULL,
      ),
      'setOptions' => 
      array (
        'name' => 'setOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 39,
                'endLine' => 39,
                'startTokenPos' => 72,
                'startFilePos' => 800,
                'endTokenPos' => 73,
                'endFilePos' => 801,
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
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 32,
            'endColumn' => 50,
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
 * Set the options the optimizer should use.
 *
 * @param array $options
 *
 * @return $this
 */',
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\ImageOptimizer',
        'declaringClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'implementingClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'currentClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'aliasName' => NULL,
      ),
      'getCommand' => 
      array (
        'name' => 'getCommand',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the command that should be executed.
 *
 * @return string
 */',
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\ImageOptimizer',
        'declaringClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'implementingClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'currentClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'aliasName' => NULL,
      ),
      'getTmpPath' => 
      array (
        'name' => 'getTmpPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the temporary file\'s path.
 *
 * @return null|string
 */',
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\ImageOptimizer',
        'declaringClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'implementingClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
        'currentClassName' => 'Spatie\\ImageOptimizer\\Optimizer',
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