var classes = [
    {
        "name": "eduluz1976\\task\\Task",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "getAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setAction",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getInput",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setInput",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getOutput",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setOutput",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getExecutionWrapper",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setExecutionWrapper",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getUid",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setUid",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addState",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "execute",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "exec",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 14,
        "nbMethods": 13,
        "nbMethodsPrivate": 2,
        "nbMethodsPublic": 11,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 0,
        "wmc": 21,
        "ccn": 8,
        "ccnMethodMax": 3,
        "externals": [
            "eduluz1976\\action\\Action",
            "eduluz1976\\task\\Task",
            "eduluz1976\\action\\Action",
            "eduluz1976\\action\\Parameters",
            "eduluz1976\\action\\Parameters",
            "eduluz1976\\task\\Task",
            "eduluz1976\\action\\Parameters",
            "eduluz1976\\action\\Parameters",
            "eduluz1976\\action\\Parameters",
            "eduluz1976\\task\\Task",
            "eduluz1976\\action\\Parameters",
            "eduluz1976\\task\\ExecutionWrapperInterface",
            "eduluz1976\\task\\Task",
            "eduluz1976\\task\\ExecutionWrapperInterface",
            "eduluz1976\\task\\Task",
            "eduluz1976\\task\\ExecutionWrapperInterface",
            "eduluz1976\\action\\Action"
        ],
        "parents": [],
        "lcom": 1,
        "length": 123,
        "vocabulary": 24,
        "volume": 563.95000000000005,
        "difficulty": 11.449999999999999,
        "effort": 6455.75,
        "level": 0.089999999999999997,
        "bugs": 0.19,
        "time": 359,
        "intelligentContent": 49.259999999999998,
        "number_operators": 36,
        "number_operands": 87,
        "number_operators_unique": 5,
        "number_operands_unique": 19,
        "cloc": 72,
        "loc": 181,
        "lloc": 109,
        "mi": 76.659999999999997,
        "mIwoC": 35.219999999999999,
        "commentWeight": 41.439999999999998,
        "kanDefect": 0.5,
        "relativeStructuralComplexity": 324,
        "relativeDataComplexity": 0.71999999999999997,
        "relativeSystemComplexity": 324.72000000000003,
        "totalStructuralComplexity": 4536,
        "totalDataComplexity": 10.109999999999999,
        "totalSystemComplexity": 4546.1099999999997,
        "package": "eduluz1976\\task\\",
        "pageRank": 0.46999999999999997,
        "afferentCoupling": 7,
        "efferentCoupling": 5,
        "instability": 0.41999999999999998,
        "violations": {}
    },
    {
        "name": "eduluz1976\\task\\ExecutionWrapper",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "getDBConn",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLogger",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSession",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "registerTask",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLsTasks",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setLsTasks",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setDbConn",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setLogger",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSession",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 9,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 2,
        "nbMethodsSetters": 4,
        "wmc": 9,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "eduluz1976\\task\\ExecutionWrapperInterface",
            "PDO",
            "eduluz1976\\task\\Task"
        ],
        "parents": [],
        "lcom": 4,
        "length": 27,
        "vocabulary": 8,
        "volume": 81,
        "difficulty": 3,
        "effort": 243,
        "level": 0.33000000000000002,
        "bugs": 0.029999999999999999,
        "time": 14,
        "intelligentContent": 27,
        "number_operators": 9,
        "number_operands": 18,
        "number_operators_unique": 2,
        "number_operands_unique": 6,
        "cloc": 45,
        "loc": 89,
        "lloc": 44,
        "mi": 95.25,
        "mIwoC": 50.649999999999999,
        "commentWeight": 44.600000000000001,
        "kanDefect": 0.14999999999999999,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 5.5599999999999996,
        "relativeSystemComplexity": 5.5599999999999996,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 50,
        "totalSystemComplexity": 50,
        "package": "eduluz1976\\task\\",
        "pageRank": 0.029999999999999999,
        "afferentCoupling": 0,
        "efferentCoupling": 3,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "eduluz1976\\task\\AttachmentManager",
        "interface": false,
        "abstract": true,
        "methods": [
            {
                "name": "addErrorAttachment",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addAttachment",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "evaluateAttachments",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "evaluateCondition",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "evaluateErrorAttachment",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 3,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 14,
        "ccn": 10,
        "ccnMethodMax": 6,
        "externals": [
            "eduluz1976\\task\\Task",
            "eduluz1976\\task\\Task",
            "eduluz1976\\task\\Condition",
            "eduluz1976\\task\\Attachment",
            "eduluz1976\\task\\Attachment"
        ],
        "parents": [],
        "lcom": 1,
        "length": 73,
        "vocabulary": 17,
        "volume": 298.38,
        "difficulty": 13.359999999999999,
        "effort": 3987.5100000000002,
        "level": 0.070000000000000007,
        "bugs": 0.10000000000000001,
        "time": 222,
        "intelligentContent": 22.329999999999998,
        "number_operators": 24,
        "number_operands": 49,
        "number_operators_unique": 6,
        "number_operands_unique": 11,
        "cloc": 38,
        "loc": 89,
        "lloc": 51,
        "mi": 86.480000000000004,
        "mIwoC": 44.079999999999998,
        "commentWeight": 42.399999999999999,
        "kanDefect": 0.56999999999999995,
        "relativeStructuralComplexity": 81,
        "relativeDataComplexity": 0.64000000000000001,
        "relativeSystemComplexity": 81.640000000000001,
        "totalStructuralComplexity": 405,
        "totalDataComplexity": 3.2000000000000002,
        "totalSystemComplexity": 408.19999999999999,
        "package": "eduluz1976\\task\\",
        "pageRank": 0.029999999999999999,
        "afferentCoupling": 0,
        "efferentCoupling": 3,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "eduluz1976\\task\\Attachment",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "getCondition",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setCondition",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTask",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTask",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "isSynced",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setSynced",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "factory",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 7,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 3,
        "nbMethodsSetters": 2,
        "wmc": 7,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "eduluz1976\\task\\Attachment",
            "eduluz1976\\task\\Condition",
            "eduluz1976\\task\\Task",
            "eduluz1976\\task\\Attachment"
        ],
        "parents": [],
        "lcom": 2,
        "length": 37,
        "vocabulary": 8,
        "volume": 111,
        "difficulty": 4.3300000000000001,
        "effort": 481,
        "level": 0.23000000000000001,
        "bugs": 0.040000000000000001,
        "time": 27,
        "intelligentContent": 25.620000000000001,
        "number_operators": 11,
        "number_operands": 26,
        "number_operators_unique": 2,
        "number_operands_unique": 6,
        "cloc": 33,
        "loc": 75,
        "lloc": 42,
        "mi": 92.939999999999998,
        "mIwoC": 50.130000000000003,
        "commentWeight": 42.799999999999997,
        "kanDefect": 0.14999999999999999,
        "relativeStructuralComplexity": 9,
        "relativeDataComplexity": 1.96,
        "relativeSystemComplexity": 10.960000000000001,
        "totalStructuralComplexity": 63,
        "totalDataComplexity": 13.75,
        "totalSystemComplexity": 76.75,
        "package": "eduluz1976\\task\\",
        "pageRank": 0.17000000000000001,
        "afferentCoupling": 3,
        "efferentCoupling": 4,
        "instability": 0.56999999999999995,
        "violations": {}
    },
    {
        "name": "eduluz1976\\task\\Condition",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "getExpression",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setExpression",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "test",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 4,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 1,
        "wmc": 5,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [],
        "parents": [],
        "lcom": 2,
        "length": 14,
        "vocabulary": 5,
        "volume": 32.509999999999998,
        "difficulty": 6.75,
        "effort": 219.41999999999999,
        "level": 0.14999999999999999,
        "bugs": 0.01,
        "time": 12,
        "intelligentContent": 4.8200000000000003,
        "number_operators": 5,
        "number_operands": 9,
        "number_operators_unique": 3,
        "number_operands_unique": 2,
        "cloc": 20,
        "loc": 44,
        "lloc": 24,
        "mi": 102.27,
        "mIwoC": 59.039999999999999,
        "commentWeight": 43.229999999999997,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 1.75,
        "relativeSystemComplexity": 2.75,
        "totalStructuralComplexity": 4,
        "totalDataComplexity": 7,
        "totalSystemComplexity": 11,
        "package": "eduluz1976\\task\\",
        "pageRank": 0.10000000000000001,
        "afferentCoupling": 2,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "eduluz1976\\task\\StateLifeCycleManagement",
        "interface": false,
        "abstract": true,
        "methods": [
            {
                "name": "getStates",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setStates",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "pushState",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 0,
        "wmc": 3,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "eduluz1976\\task\\Task"
        ],
        "parents": [],
        "lcom": 1,
        "length": 12,
        "vocabulary": 5,
        "volume": 27.859999999999999,
        "difficulty": 2.6699999999999999,
        "effort": 74.299999999999997,
        "level": 0.38,
        "bugs": 0.01,
        "time": 4,
        "intelligentContent": 10.449999999999999,
        "number_operators": 4,
        "number_operands": 8,
        "number_operators_unique": 2,
        "number_operands_unique": 3,
        "cloc": 10,
        "loc": 28,
        "lloc": 18,
        "mi": 102.31999999999999,
        "mIwoC": 62.369999999999997,
        "commentWeight": 39.960000000000001,
        "kanDefect": 0.14999999999999999,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2.6699999999999999,
        "relativeSystemComplexity": 2.6699999999999999,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 8,
        "totalSystemComplexity": 8,
        "package": "eduluz1976\\task\\",
        "pageRank": 0.029999999999999999,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    }
]