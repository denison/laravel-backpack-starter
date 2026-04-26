<?php declare(strict_types = 1);

// osfsl-/var/www/vendor/composer/../spatie/laravel-medialibrary/src/Conversions/ImageGenerators/Pdf.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Spatie\MediaLibrary\Conversions\ImageGenerators\Pdf
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-be92d108dfa93372dd2ca4f80c30546145f4f5222d2e37217740e4eeb8e548ee-8.4.20-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'filename' => '/var/www/vendor/composer/../spatie/laravel-medialibrary/src/Conversions/ImageGenerators/Pdf.php',
      ),
    ),
    'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
    'name' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
    'shortName' => 'Pdf',
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
    'endLine' => 55,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\ImageGenerator',
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
            'startLine' => 13,
            'endLine' => 13,
            'startColumn' => 29,
            'endColumn' => 40,
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
                'startLine' => 13,
                'endLine' => 13,
                'startTokenPos' => 60,
                'startFilePos' => 334,
                'endTokenPos' => 60,
                'endFilePos' => 337,
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
            'startLine' => 13,
            'endLine' => 13,
            'startColumn' => 43,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
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
        'startLine' => 13,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'aliasName' => NULL,
      ),
      'usesPdfToImageV3' => 
      array (
        'name' => 'usesPdfToImageV3',
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
        'startLine' => 28,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
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
        'startLine' => 33,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
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
        'startLine' => 46,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
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
        'startLine' => 51,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators',
        'declaringClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'implementingClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
        'currentClassName' => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
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