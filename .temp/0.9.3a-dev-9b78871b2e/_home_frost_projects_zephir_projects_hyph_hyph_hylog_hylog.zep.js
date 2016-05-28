[
    {
        "type": "namespace",
        "name": "Hyph\\Hylog",
        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "DateTime",
                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                "line": 3,
                "char": 13
            }
        ],
        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
        "line": 4,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Hyph\\Exception\\PermissionDeniedException",
                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                "line": 4,
                "char": 45
            }
        ],
        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
        "line": 5,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "InvalidArgumentException",
                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                "line": 5,
                "char": 29
            }
        ],
        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
        "line": 7,
        "char": 5
    },
    {
        "type": "class",
        "name": "Hylog",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "path",
                    "default": {
                        "type": "string",
                        "value": "",
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 9,
                        "char": 22
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 11,
                    "char": 9
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__construct",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "path",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 22,
                            "char": 44
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "path",
                                    "expr": {
                                        "type": "variable",
                                        "value": "path",
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 24,
                                        "char": 30
                                    },
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 24,
                                    "char": 30
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 25,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 25,
                                    "char": 14
                                },
                                "name": "checkPath",
                                "call-type": 1,
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 25,
                                "char": 26
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 26,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 22,
                    "last-line": 28,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "log",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "level",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 28,
                            "char": 37
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 28,
                            "char": 53
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 28,
                            "char": 68
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "line",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 30,
                                    "char": 17
                                },
                                {
                                    "variable": "timestamp",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 30,
                                    "char": 28
                                },
                                {
                                    "variable": "datetime",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 30,
                                    "char": 38
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 32,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "line",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 32,
                                            "char": 25
                                        },
                                        "name": "interpolate",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 32,
                                                    "char": 45
                                                },
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 32,
                                                "char": 45
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "context",
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 32,
                                                    "char": 54
                                                },
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 32,
                                                "char": 54
                                            }
                                        ],
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 32,
                                        "char": 55
                                    },
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 32,
                                    "char": 55
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 33,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "timestamp",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "time",
                                        "call-type": 1,
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 33,
                                        "char": 31
                                    },
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 33,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 34,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "datetime",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "date",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "DateTime",
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 34,
                                                        "char": 43
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "ATOM",
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 34,
                                                        "char": 43
                                                    },
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 34,
                                                    "char": 43
                                                },
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 34,
                                                "char": 43
                                            }
                                        ],
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 34,
                                        "char": 44
                                    },
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 34,
                                    "char": 44
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 36,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "line",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "timestamp",
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 36,
                                                        "char": 30
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "\\t",
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 36,
                                                        "char": 37
                                                    },
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 36,
                                                    "char": 37
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "datetime",
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 36,
                                                    "char": 48
                                                },
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 36,
                                                "char": 48
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "\\t",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 36,
                                                "char": 55
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 36,
                                            "char": 55
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "line",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 36,
                                            "char": 61
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 36,
                                        "char": 61
                                    },
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 36,
                                    "char": 61
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 38,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 38,
                                    "char": 14
                                },
                                "name": "process",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "level",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 38,
                                            "char": 28
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 38,
                                        "char": 28
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "line",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 38,
                                            "char": 34
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 38,
                                        "char": 34
                                    }
                                ],
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 38,
                                "char": 35
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 39,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 28,
                    "last-line": 41,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "emergency",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 41,
                            "char": 45
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 41,
                            "char": 60
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 43,
                                    "char": 14
                                },
                                "name": "log",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 43,
                                                "char": 34
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "EMERGENCY",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 43,
                                                "char": 34
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 43,
                                            "char": 34
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 43,
                                        "char": 34
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 43,
                                            "char": 43
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 43,
                                        "char": 43
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "context",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 43,
                                            "char": 52
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 43,
                                        "char": 52
                                    }
                                ],
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 43,
                                "char": 53
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 44,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 41,
                    "last-line": 46,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "alert",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 46,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 46,
                            "char": 56
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 48,
                                    "char": 14
                                },
                                "name": "log",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 48,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "ALERT",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 48,
                                                "char": 30
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 48,
                                            "char": 30
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 48,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 48,
                                            "char": 39
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 48,
                                        "char": 39
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "context",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 48,
                                            "char": 48
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 48,
                                        "char": 48
                                    }
                                ],
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 48,
                                "char": 49
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 49,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 46,
                    "last-line": 51,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "critical",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 51,
                            "char": 44
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 51,
                            "char": 59
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 53,
                                    "char": 14
                                },
                                "name": "log",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 53,
                                                "char": 33
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "CRITICAL",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 53,
                                                "char": 33
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 53,
                                            "char": 33
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 53,
                                        "char": 33
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 53,
                                            "char": 42
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 53,
                                        "char": 42
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "context",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 53,
                                            "char": 51
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 53,
                                        "char": 51
                                    }
                                ],
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 53,
                                "char": 52
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 54,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 51,
                    "last-line": 56,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "error",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 56,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 56,
                            "char": 56
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 58,
                                    "char": 14
                                },
                                "name": "log",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 58,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "ERROR",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 58,
                                                "char": 30
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 58,
                                            "char": 30
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 58,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 58,
                                            "char": 39
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 58,
                                        "char": 39
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "context",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 58,
                                            "char": 48
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 58,
                                        "char": 48
                                    }
                                ],
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 58,
                                "char": 49
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 59,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 56,
                    "last-line": 61,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "warning",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 61,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 61,
                            "char": 58
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 63,
                                    "char": 14
                                },
                                "name": "log",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 63,
                                                "char": 32
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "WARNING",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 63,
                                                "char": 32
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 63,
                                            "char": 32
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 63,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 63,
                                            "char": 41
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 63,
                                        "char": 41
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "context",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 63,
                                            "char": 50
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 63,
                                        "char": 50
                                    }
                                ],
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 63,
                                "char": 51
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 64,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 61,
                    "last-line": 66,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "notice",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 66,
                            "char": 42
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 66,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 68,
                                    "char": 14
                                },
                                "name": "log",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 68,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "NOTICE",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 68,
                                                "char": 31
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 68,
                                            "char": 31
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 68,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 68,
                                            "char": 40
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 68,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "context",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 68,
                                            "char": 49
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 68,
                                        "char": 49
                                    }
                                ],
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 68,
                                "char": 50
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 69,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 66,
                    "last-line": 71,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "info",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 71,
                            "char": 40
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 71,
                            "char": 55
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 73,
                                    "char": 14
                                },
                                "name": "log",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 73,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "INFO",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 73,
                                                "char": 29
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 73,
                                            "char": 29
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 73,
                                        "char": 29
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 73,
                                            "char": 38
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 73,
                                        "char": 38
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "context",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 73,
                                            "char": 47
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 73,
                                        "char": 47
                                    }
                                ],
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 73,
                                "char": 48
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 74,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 71,
                    "last-line": 76,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "debug",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 76,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 76,
                            "char": 56
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 78,
                                    "char": 14
                                },
                                "name": "log",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "static-constant-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "self",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 78,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "DEBUG",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 78,
                                                "char": 30
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 78,
                                            "char": 30
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 78,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 78,
                                            "char": 39
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 78,
                                        "char": 39
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "context",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 78,
                                            "char": 48
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 78,
                                        "char": 48
                                    }
                                ],
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 78,
                                "char": 49
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 79,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 76,
                    "last-line": 81,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setPath",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "path",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 81,
                            "char": 40
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "path",
                                    "expr": {
                                        "type": "variable",
                                        "value": "path",
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 83,
                                        "char": 30
                                    },
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 83,
                                    "char": 30
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 84,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 84,
                                    "char": 14
                                },
                                "name": "checkPath",
                                "call-type": 1,
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 84,
                                "char": 26
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 85,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 81,
                    "last-line": 87,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getPath",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 89,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "path",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 89,
                                    "char": 26
                                },
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 89,
                                "char": 26
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 90,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 88,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 88,
                        "char": 5
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 87,
                    "last-line": 92,
                    "char": 19
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "process",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "level",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 92,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 92,
                            "char": 59
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "realfile",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 94,
                                    "char": 21
                                },
                                {
                                    "variable": "datetime",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 94,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 95,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "datetime",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "date",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "YmdH",
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 95,
                                                    "char": 35
                                                },
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 95,
                                                "char": 35
                                            }
                                        ],
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 95,
                                        "char": 36
                                    },
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 95,
                                    "char": 36
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 96,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "realfile",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                "line": 96,
                                                                "char": 29
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "path",
                                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                "line": 96,
                                                                "char": 35
                                                            },
                                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                            "line": 96,
                                                            "char": 35
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "\/",
                                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                            "line": 96,
                                                            "char": 41
                                                        },
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 96,
                                                        "char": 41
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "level",
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 96,
                                                        "char": 49
                                                    },
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 96,
                                                    "char": 49
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": ".",
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 96,
                                                    "char": 55
                                                },
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 96,
                                                "char": 55
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "datetime",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 96,
                                                "char": 66
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 96,
                                            "char": 66
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": ".log",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 96,
                                            "char": 74
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 96,
                                        "char": 74
                                    },
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 96,
                                    "char": 74
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 98,
                            "char": 17
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "error_log",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "concat",
                                            "left": {
                                                "type": "variable",
                                                "value": "message",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 98,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "constant",
                                                "value": "PHP_EOL",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 98,
                                                "char": 36
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 98,
                                            "char": 36
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 98,
                                        "char": 36
                                    },
                                    {
                                        "parameter": {
                                            "type": "int",
                                            "value": "3",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 98,
                                            "char": 39
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 98,
                                        "char": 39
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "realfile",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 98,
                                            "char": 49
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 98,
                                        "char": 49
                                    }
                                ],
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 98,
                                "char": 50
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 99,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 92,
                    "last-line": 101,
                    "char": 20
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "checkPath",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "mkdirResult",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 103,
                                    "char": 24
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 104,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "fcall",
                                        "name": "file_exists",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 104,
                                                        "char": 31
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "path",
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 104,
                                                        "char": 36
                                                    },
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 104,
                                                    "char": 36
                                                },
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 104,
                                                "char": 36
                                            }
                                        ],
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 104,
                                        "char": 37
                                    },
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 104,
                                    "char": 37
                                },
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 104,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "mkdirResult",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "mkdir",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                "line": 105,
                                                                "char": 42
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "path",
                                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                "line": 105,
                                                                "char": 47
                                                            },
                                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                            "line": 105,
                                                            "char": 47
                                                        },
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 105,
                                                        "char": 47
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "0700",
                                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                            "line": 105,
                                                            "char": 55
                                                        },
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 105,
                                                        "char": 55
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "bool",
                                                            "value": "true",
                                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                            "line": 105,
                                                            "char": 61
                                                        },
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 105,
                                                        "char": 61
                                                    }
                                                ],
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 105,
                                                "char": 62
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 105,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 106,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "identical",
                                            "left": {
                                                "type": "variable",
                                                "value": "mkdirResult",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 106,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 106,
                                                "char": 38
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 106,
                                            "char": 38
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 106,
                                        "char": 40
                                    },
                                    "statements": [
                                        {
                                            "type": "throw",
                                            "expr": {
                                                "type": "new",
                                                "class": "PermissionDeniedException",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "string",
                                                                    "value": "Can't create directory in ",
                                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                    "line": 107,
                                                                    "char": 82
                                                                },
                                                                "right": {
                                                                    "type": "property-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "this",
                                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                        "line": 107,
                                                                        "char": 89
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "path",
                                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                        "line": 107,
                                                                        "char": 95
                                                                    },
                                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                    "line": 107,
                                                                    "char": 95
                                                                },
                                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                "line": 107,
                                                                "char": 95
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": ", please check again.",
                                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                "line": 107,
                                                                "char": 120
                                                            },
                                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                            "line": 107,
                                                            "char": 120
                                                        },
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 107,
                                                        "char": 120
                                                    }
                                                ],
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 107,
                                                "char": 121
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 108,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 109,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "not",
                                            "left": {
                                                "type": "fcall",
                                                "name": "is_dir",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                "line": 110,
                                                                "char": 30
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "path",
                                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                                "line": 110,
                                                                "char": 35
                                                            },
                                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                            "line": 110,
                                                            "char": 35
                                                        },
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 110,
                                                        "char": 35
                                                    }
                                                ],
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 110,
                                                "char": 36
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 110,
                                            "char": 36
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 110,
                                        "char": 38
                                    },
                                    "statements": [
                                        {
                                            "type": "throw",
                                            "expr": {
                                                "type": "new",
                                                "class": "InvalidArgumentException",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "A valid path must be passed to store log files.",
                                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                            "line": 111,
                                                            "char": 101
                                                        },
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 111,
                                                        "char": 101
                                                    }
                                                ],
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 111,
                                                "char": 102
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 112,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 113,
                                    "char": 9
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 115,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "path",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "rtrim",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 115,
                                                        "char": 37
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "path",
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 115,
                                                        "char": 42
                                                    },
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 115,
                                                    "char": 42
                                                },
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 115,
                                                "char": 42
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "\/",
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 115,
                                                    "char": 47
                                                },
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 115,
                                                "char": 47
                                            }
                                        ],
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 115,
                                        "char": 48
                                    },
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 115,
                                    "char": 48
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 116,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 101,
                    "last-line": 118,
                    "char": 20
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "interpolate",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 118,
                            "char": 48
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 118,
                                "char": 68
                            },
                            "reference": 0,
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 118,
                            "char": 68
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "array",
                            "variables": [
                                {
                                    "variable": "replacement",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 120,
                                        "char": 31
                                    },
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 120,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 121,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "key",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 121,
                                    "char": 16
                                },
                                {
                                    "variable": "value",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 121,
                                    "char": 23
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 123,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "context",
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 123,
                                "char": 35
                            },
                            "key": "key",
                            "value": "value",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "replacement",
                                            "index-expr": [
                                                {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "{",
                                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                            "line": 124,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                            "line": 124,
                                                            "char": 39
                                                        },
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 124,
                                                        "char": 39
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "}",
                                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                        "line": 124,
                                                        "char": 44
                                                    },
                                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                    "line": 124,
                                                    "char": 44
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                                "line": 124,
                                                "char": 53
                                            },
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 124,
                                            "char": 53
                                        }
                                    ],
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 125,
                                    "char": 9
                                }
                            ],
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 127,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "strtr",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 127,
                                            "char": 29
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 127,
                                        "char": 29
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "replacement",
                                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                            "line": 127,
                                            "char": 42
                                        },
                                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                        "line": 127,
                                        "char": 42
                                    }
                                ],
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 127,
                                "char": 43
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 128,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 119,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 119,
                        "char": 5
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 118,
                    "last-line": 130,
                    "char": 20
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getVersion",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "static-constant-access",
                                "left": {
                                    "type": "variable",
                                    "value": "self",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 132,
                                    "char": 35
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "HYLOG_VERSION",
                                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                    "line": 132,
                                    "char": 35
                                },
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 132,
                                "char": 35
                            },
                            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                            "line": 133,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                                "line": 131,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 131,
                        "char": 5
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 130,
                    "last-line": 134,
                    "char": 19
                }
            ],
            "constants": [
                {
                    "type": "const",
                    "name": "HYLOG_VERSION",
                    "default": {
                        "type": "string",
                        "value": "0.1.0",
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 11,
                        "char": 34
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 13,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "EMERGENCY",
                    "default": {
                        "type": "string",
                        "value": "EMERGENCY",
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 13,
                        "char": 34
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 14,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "ALERT",
                    "default": {
                        "type": "string",
                        "value": "ALERT",
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 14,
                        "char": 30
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 15,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "CRITICAL",
                    "default": {
                        "type": "string",
                        "value": "CRITICAL",
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 15,
                        "char": 33
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 16,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "ERROR",
                    "default": {
                        "type": "string",
                        "value": "ERROR",
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 16,
                        "char": 30
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 17,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "WARNING",
                    "default": {
                        "type": "string",
                        "value": "WARNING",
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 17,
                        "char": 32
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 18,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "NOTICE",
                    "default": {
                        "type": "string",
                        "value": "NOTICE",
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 18,
                        "char": 31
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 19,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "INFO",
                    "default": {
                        "type": "string",
                        "value": "INFO",
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 19,
                        "char": 29
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 20,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "DEBUG",
                    "default": {
                        "type": "string",
                        "value": "DEBUG",
                        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                        "line": 20,
                        "char": 30
                    },
                    "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
                    "line": 22,
                    "char": 10
                }
            ],
            "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
            "line": 7,
            "char": 5
        },
        "file": "\/home\/frost\/projects\/zephir\/projects\/hyph\/hyph\/hylog\/hylog.zep",
        "line": 7,
        "char": 5
    }
]