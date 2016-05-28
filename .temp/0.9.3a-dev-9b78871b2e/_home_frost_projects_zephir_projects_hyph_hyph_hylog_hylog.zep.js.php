<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Hyph\\Hylog',
    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
    'line' => 3,
    'char' => 3,
  ),
  1 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'DateTime',
        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
        'line' => 3,
        'char' => 13,
      ),
    ),
    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
    'line' => 4,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Hyph\\Exception\\PermissionDeniedException',
        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
        'line' => 4,
        'char' => 45,
      ),
    ),
    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
    'line' => 5,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'InvalidArgumentException',
        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
        'line' => 5,
        'char' => 29,
      ),
    ),
    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
    'line' => 7,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'Hylog',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'path',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 9,
            'char' => 22,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 11,
          'char' => 9,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'path',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 22,
              'char' => 44,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'path',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'path',
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 24,
                    'char' => 30,
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 24,
                  'char' => 30,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 25,
              'char' => 12,
            ),
            1 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 25,
                  'char' => 14,
                ),
                'name' => 'checkPath',
                'call-type' => 1,
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 25,
                'char' => 26,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 26,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 22,
          'last-line' => 28,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'log',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'level',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 28,
              'char' => 37,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 28,
              'char' => 53,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 28,
              'char' => 68,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'line',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 30,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'timestamp',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 30,
                  'char' => 28,
                ),
                2 => 
                array (
                  'variable' => 'datetime',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 30,
                  'char' => 38,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 32,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'line',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 32,
                      'char' => 25,
                    ),
                    'name' => 'interpolate',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 32,
                          'char' => 45,
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 32,
                        'char' => 45,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'context',
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 32,
                          'char' => 54,
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 32,
                        'char' => 54,
                      ),
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 32,
                    'char' => 55,
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 32,
                  'char' => 55,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 33,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'timestamp',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'time',
                    'call-type' => 1,
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 33,
                    'char' => 31,
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 33,
                  'char' => 31,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 34,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'datetime',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'date',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'DateTime',
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 34,
                            'char' => 43,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ATOM',
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 34,
                            'char' => 43,
                          ),
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 34,
                          'char' => 43,
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 34,
                        'char' => 43,
                      ),
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 34,
                    'char' => 44,
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 34,
                  'char' => 44,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 36,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'line',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'timestamp',
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 36,
                            'char' => 30,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => '\\t',
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 36,
                            'char' => 37,
                          ),
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 36,
                          'char' => 37,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'datetime',
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 36,
                          'char' => 48,
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 36,
                        'char' => 48,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => '\\t',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 36,
                        'char' => 55,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 36,
                      'char' => 55,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'line',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 36,
                      'char' => 61,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 36,
                    'char' => 61,
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 36,
                  'char' => 61,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 38,
              'char' => 12,
            ),
            5 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 38,
                  'char' => 14,
                ),
                'name' => 'process',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'level',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 38,
                      'char' => 28,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 38,
                    'char' => 28,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'line',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 38,
                      'char' => 34,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 38,
                    'char' => 34,
                  ),
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 38,
                'char' => 35,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 39,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 28,
          'last-line' => 41,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'emergency',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 41,
              'char' => 45,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 41,
              'char' => 60,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 43,
                  'char' => 14,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 43,
                        'char' => 34,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'EMERGENCY',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 43,
                        'char' => 34,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 43,
                      'char' => 34,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 43,
                    'char' => 34,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 43,
                      'char' => 43,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 43,
                    'char' => 43,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 43,
                      'char' => 52,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 43,
                    'char' => 52,
                  ),
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 43,
                'char' => 53,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 44,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 41,
          'last-line' => 46,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'alert',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 46,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 46,
              'char' => 56,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 48,
                  'char' => 14,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 48,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'ALERT',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 48,
                        'char' => 30,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 48,
                      'char' => 30,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 48,
                    'char' => 30,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 48,
                      'char' => 39,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 48,
                    'char' => 39,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 48,
                      'char' => 48,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 48,
                    'char' => 48,
                  ),
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 48,
                'char' => 49,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 49,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 46,
          'last-line' => 51,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'critical',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 51,
              'char' => 44,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 51,
              'char' => 59,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 53,
                  'char' => 14,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 53,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'CRITICAL',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 53,
                        'char' => 33,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 53,
                      'char' => 33,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 53,
                    'char' => 33,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 53,
                      'char' => 42,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 53,
                    'char' => 42,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 53,
                      'char' => 51,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 53,
                    'char' => 51,
                  ),
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 53,
                'char' => 52,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 54,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 51,
          'last-line' => 56,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'error',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 56,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 56,
              'char' => 56,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 58,
                  'char' => 14,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 58,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'ERROR',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 58,
                        'char' => 30,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 58,
                      'char' => 30,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 58,
                    'char' => 30,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 58,
                      'char' => 39,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 58,
                    'char' => 39,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 58,
                      'char' => 48,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 58,
                    'char' => 48,
                  ),
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 58,
                'char' => 49,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 59,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 56,
          'last-line' => 61,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'warning',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 61,
              'char' => 43,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 61,
              'char' => 58,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 63,
                  'char' => 14,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 63,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'WARNING',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 63,
                        'char' => 32,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 63,
                      'char' => 32,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 63,
                    'char' => 32,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 63,
                      'char' => 41,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 63,
                    'char' => 41,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 63,
                      'char' => 50,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 63,
                    'char' => 50,
                  ),
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 63,
                'char' => 51,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 64,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 61,
          'last-line' => 66,
          'char' => 19,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'notice',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 66,
              'char' => 42,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 66,
              'char' => 57,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 68,
                  'char' => 14,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 68,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'NOTICE',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 68,
                        'char' => 31,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 68,
                      'char' => 31,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 68,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 68,
                      'char' => 40,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 68,
                    'char' => 40,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 68,
                      'char' => 49,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 68,
                    'char' => 49,
                  ),
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 68,
                'char' => 50,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 69,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 66,
          'last-line' => 71,
          'char' => 19,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'info',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 71,
              'char' => 40,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 71,
              'char' => 55,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 73,
                  'char' => 14,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 73,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'INFO',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 73,
                        'char' => 29,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 73,
                      'char' => 29,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 73,
                    'char' => 29,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 73,
                      'char' => 38,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 73,
                    'char' => 38,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 73,
                      'char' => 47,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 73,
                    'char' => 47,
                  ),
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 73,
                'char' => 48,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 74,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 71,
          'last-line' => 76,
          'char' => 19,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'debug',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 76,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 76,
              'char' => 56,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 78,
                  'char' => 14,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 78,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'DEBUG',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 78,
                        'char' => 30,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 78,
                      'char' => 30,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 78,
                    'char' => 30,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 78,
                      'char' => 39,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 78,
                    'char' => 39,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 78,
                      'char' => 48,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 78,
                    'char' => 48,
                  ),
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 78,
                'char' => 49,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 79,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 76,
          'last-line' => 81,
          'char' => 19,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setPath',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'path',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 81,
              'char' => 40,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'path',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'path',
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 83,
                    'char' => 30,
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 83,
                  'char' => 30,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 84,
              'char' => 12,
            ),
            1 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 84,
                  'char' => 14,
                ),
                'name' => 'checkPath',
                'call-type' => 1,
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 84,
                'char' => 26,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 85,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 81,
          'last-line' => 87,
          'char' => 19,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getPath',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 89,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'path',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 89,
                  'char' => 26,
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 89,
                'char' => 26,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 90,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 88,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 88,
            'char' => 5,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 87,
          'last-line' => 92,
          'char' => 19,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'process',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'level',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 92,
              'char' => 43,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 92,
              'char' => 59,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'realfile',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 94,
                  'char' => 21,
                ),
                1 => 
                array (
                  'variable' => 'datetime',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 94,
                  'char' => 31,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 95,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'datetime',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'date',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'YmdH',
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 95,
                          'char' => 35,
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 95,
                        'char' => 35,
                      ),
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 95,
                    'char' => 36,
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 95,
                  'char' => 36,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 96,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'realfile',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                'line' => 96,
                                'char' => 29,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'path',
                                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                'line' => 96,
                                'char' => 35,
                              ),
                              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                              'line' => 96,
                              'char' => 35,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '/',
                              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                              'line' => 96,
                              'char' => 41,
                            ),
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 96,
                            'char' => 41,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'level',
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 96,
                            'char' => 49,
                          ),
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 96,
                          'char' => 49,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '.',
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 96,
                          'char' => 55,
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 96,
                        'char' => 55,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'datetime',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 96,
                        'char' => 66,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 96,
                      'char' => 66,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '.log',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 96,
                      'char' => 74,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 96,
                    'char' => 74,
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 96,
                  'char' => 74,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 98,
              'char' => 17,
            ),
            3 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'error_log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'message',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 98,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'constant',
                        'value' => 'PHP_EOL',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 98,
                        'char' => 36,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 98,
                      'char' => 36,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 98,
                    'char' => 36,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '3',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 98,
                      'char' => 39,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 98,
                    'char' => 39,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'realfile',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 98,
                      'char' => 49,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 98,
                    'char' => 49,
                  ),
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 98,
                'char' => 50,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 99,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 92,
          'last-line' => 101,
          'char' => 20,
        ),
        13 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'checkPath',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'mkdirResult',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 103,
                  'char' => 24,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 104,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'file_exists',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 104,
                            'char' => 31,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'path',
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 104,
                            'char' => 36,
                          ),
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 104,
                          'char' => 36,
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 104,
                        'char' => 36,
                      ),
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 104,
                    'char' => 37,
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 104,
                  'char' => 37,
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 104,
                'char' => 39,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'mkdirResult',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'mkdir',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                'line' => 105,
                                'char' => 42,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'path',
                                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                'line' => 105,
                                'char' => 47,
                              ),
                              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                              'line' => 105,
                              'char' => 47,
                            ),
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 105,
                            'char' => 47,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '0700',
                              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                              'line' => 105,
                              'char' => 55,
                            ),
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 105,
                            'char' => 55,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                              'line' => 105,
                              'char' => 61,
                            ),
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 105,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 105,
                        'char' => 62,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 105,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 106,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'identical',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'mkdirResult',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 106,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 106,
                        'char' => 38,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 106,
                      'char' => 38,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 106,
                    'char' => 40,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'throw',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'PermissionDeniedException',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'Can\'t create directory in ',
                                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                  'line' => 107,
                                  'char' => 82,
                                ),
                                'right' => 
                                array (
                                  'type' => 'property-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'this',
                                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                    'line' => 107,
                                    'char' => 89,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'path',
                                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                    'line' => 107,
                                    'char' => 95,
                                  ),
                                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                  'line' => 107,
                                  'char' => 95,
                                ),
                                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                'line' => 107,
                                'char' => 95,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ', please check again.',
                                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                'line' => 107,
                                'char' => 120,
                              ),
                              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                              'line' => 107,
                              'char' => 120,
                            ),
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 107,
                            'char' => 120,
                          ),
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 107,
                        'char' => 121,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 108,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 109,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'is_dir',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                'line' => 110,
                                'char' => 30,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'path',
                                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                                'line' => 110,
                                'char' => 35,
                              ),
                              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                              'line' => 110,
                              'char' => 35,
                            ),
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 110,
                            'char' => 35,
                          ),
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 110,
                        'char' => 36,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 110,
                      'char' => 36,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 110,
                    'char' => 38,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'throw',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'InvalidArgumentException',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'A valid path must be passed to store log files.',
                              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                              'line' => 111,
                              'char' => 101,
                            ),
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 111,
                            'char' => 101,
                          ),
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 111,
                        'char' => 102,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 112,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 113,
                  'char' => 9,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 115,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'path',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'rtrim',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 115,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'path',
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 115,
                            'char' => 42,
                          ),
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 115,
                          'char' => 42,
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 115,
                        'char' => 42,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '/',
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 115,
                          'char' => 47,
                        ),
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 115,
                        'char' => 47,
                      ),
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 115,
                    'char' => 48,
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 115,
                  'char' => 48,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 116,
              'char' => 5,
            ),
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 101,
          'last-line' => 118,
          'char' => 20,
        ),
        14 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'interpolate',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 118,
              'char' => 48,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 118,
                'char' => 68,
              ),
              'reference' => 0,
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 118,
              'char' => 68,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'replacement',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 120,
                    'char' => 31,
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 120,
                  'char' => 31,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 121,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 121,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'value',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 121,
                  'char' => 23,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 123,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'context',
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 123,
                'char' => 35,
              ),
              'key' => 'key',
              'value' => 'value',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'replacement',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => '{',
                              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                              'line' => 124,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                              'line' => 124,
                              'char' => 39,
                            ),
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 124,
                            'char' => 39,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => '}',
                            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                            'line' => 124,
                            'char' => 44,
                          ),
                          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                          'line' => 124,
                          'char' => 44,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                        'line' => 124,
                        'char' => 53,
                      ),
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 124,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 125,
                  'char' => 9,
                ),
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 127,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'strtr',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 127,
                      'char' => 29,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 127,
                    'char' => 29,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'replacement',
                      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                      'line' => 127,
                      'char' => 42,
                    ),
                    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                    'line' => 127,
                    'char' => 42,
                  ),
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 127,
                'char' => 43,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 128,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 119,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 119,
            'char' => 5,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 118,
          'last-line' => 130,
          'char' => 20,
        ),
        15 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getVersion',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'static-constant-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'self',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 132,
                  'char' => 35,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'HYLOG_VERSION',
                  'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                  'line' => 132,
                  'char' => 35,
                ),
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 132,
                'char' => 35,
              ),
              'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
              'line' => 133,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
                'line' => 131,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 131,
            'char' => 5,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 130,
          'last-line' => 134,
          'char' => 19,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'HYLOG_VERSION',
          'default' => 
          array (
            'type' => 'string',
            'value' => '0.1.0',
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 11,
            'char' => 34,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 13,
          'char' => 9,
        ),
        1 => 
        array (
          'type' => 'const',
          'name' => 'EMERGENCY',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'EMERGENCY',
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 13,
            'char' => 34,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 14,
          'char' => 9,
        ),
        2 => 
        array (
          'type' => 'const',
          'name' => 'ALERT',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'ALERT',
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 14,
            'char' => 30,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 15,
          'char' => 9,
        ),
        3 => 
        array (
          'type' => 'const',
          'name' => 'CRITICAL',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'CRITICAL',
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 15,
            'char' => 33,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 16,
          'char' => 9,
        ),
        4 => 
        array (
          'type' => 'const',
          'name' => 'ERROR',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'ERROR',
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 16,
            'char' => 30,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 17,
          'char' => 9,
        ),
        5 => 
        array (
          'type' => 'const',
          'name' => 'WARNING',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'WARNING',
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 17,
            'char' => 32,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 18,
          'char' => 9,
        ),
        6 => 
        array (
          'type' => 'const',
          'name' => 'NOTICE',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'NOTICE',
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 18,
            'char' => 31,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 19,
          'char' => 9,
        ),
        7 => 
        array (
          'type' => 'const',
          'name' => 'INFO',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'INFO',
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 19,
            'char' => 29,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 20,
          'char' => 9,
        ),
        8 => 
        array (
          'type' => 'const',
          'name' => 'DEBUG',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'DEBUG',
            'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
            'line' => 20,
            'char' => 30,
          ),
          'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
          'line' => 22,
          'char' => 10,
        ),
      ),
      'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
      'line' => 7,
      'char' => 5,
    ),
    'file' => '/home/frost/projects/zephir/projects/hyph/hyph/hylog/hylog.zep',
    'line' => 7,
    'char' => 5,
  ),
);