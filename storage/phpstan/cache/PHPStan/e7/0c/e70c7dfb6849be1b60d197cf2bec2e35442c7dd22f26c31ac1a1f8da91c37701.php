<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../spatie/laravel-medialibrary/src/Conversions/ImageGenerators/ImageGenerator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\MediaLibrary\Conversions\ImageGenerators\ImageGenerator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-2249a53b310aeba8410d5650492ad1c64e0bd1cabd5dc69bc94e3f4fa7888321-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'filename' => '/var/www/vendor/composer/../spatie/laravel-medialibrary/src/Conversions/ImageGenerators/ImageGenerator.php',
      ),
    ),
    'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
    'name' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
    'shortName' => 'ImageGenerator',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 58,
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
      'convert' => 
      array (
        'name' => 'convert',
        'parameters' => 
        array (
          'file' => 
          array (
            'name' => 'file',
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
            'startLine' => 14,
            'endLine' => 14,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'conversion' => 
          array (
            'name' => 'conversion',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 14,
                'endLine' => 14,
                'startTokenPos' => 52,
                'startFilePos' => 418,
                'endTokenPos' => 52,
                'endFilePos' => 421,
              ),
            ),
            'type' => 
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
                      'name' => 'Spatie\\MediaLibrary\\Conversions\\Conversion',
                      'isIdentifier' => false,
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 14,
            'endLine' => 14,
            'startColumn' => 52,
            'endColumn' => 81,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
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
        'docComment' => NULL,
        'startLine' => 14,
        'endLine' => 14,
        'startColumn' => 5,
        'endColumn' => 92,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'aliasName' => NULL,
      ),
      'canConvert' => 
      array (
        'name' => 'canConvert',
        'parameters' => 
        array (
          'media' => 
          array (
            'name' => 'media',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 32,
            'endColumn' => 43,
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
        'docComment' => NULL,
        'startLine' => 16,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'aliasName' => NULL,
      ),
      'shouldMatchBothExtensionsAndMimeTypes' => 
      array (
        'name' => 'shouldMatchBothExtensionsAndMimeTypes',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 33,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'aliasName' => NULL,
      ),
      'canHandleMime' => 
      array (
        'name' => 'canHandleMime',
        'parameters' => 
        array (
          'mime' => 
          array (
            'name' => 'mime',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 38,
                'endLine' => 38,
                'startTokenPos' => 197,
                'startFilePos' => 1078,
                'endTokenPos' => 197,
                'endFilePos' => 1079,
              ),
            ),
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
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 35,
            'endColumn' => 51,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 38,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'aliasName' => NULL,
      ),
      'canHandleExtension' => 
      array (
        'name' => 'canHandleExtension',
        'parameters' => 
        array (
          'extension' => 
          array (
            'name' => 'extension',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 43,
                'endLine' => 43,
                'startTokenPos' => 233,
                'startFilePos' => 1221,
                'endTokenPos' => 233,
                'endFilePos' => 1222,
              ),
            ),
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
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 40,
            'endColumn' => 61,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 43,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'aliasName' => NULL,
      ),
      'getType' => 
      array (
        'name' => 'getType',
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
        'docComment' => NULL,
        'startLine' => 48,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'aliasName' => NULL,
      ),
      'requirementsAreInstalled' => 
      array (
        'name' => 'requirementsAreInstalled',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'aliasName' => NULL,
      ),
      'supportedExtensions' => 
      array (
        'name' => 'supportedExtensions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 63,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'aliasName' => NULL,
      ),
      'supportedMimeTypes' => 
      array (
        'name' => 'supportedMimeTypes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
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