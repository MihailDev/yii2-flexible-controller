Yii2 Flexible Controller
===========================

Универсальный контроллер для подключения standalone actions


## Установка

```json
"mihaildev/yii2-flexible-controller": "*"
```

## Настройка и Использование

```php
'controllerMap' => [
        'auth' => [
            'class' => 'mihaildev\flexibleController\Controller',
            'behaviors' => [
                'access' => [
                    'class' => 'yii\filters\AccessControl',
                    'only' => ['logout'],
                    'rules' => [
                        [
                            'actions' => ['logout'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => 'yii\filters\VerbFilter',
                    'actions' => [
                        'logout' => ['post'],
                    ],
                ],
            ],
            'actions' => [
                'login' => 'standalone\action\LogIn',
                'logout' => 'standalone\action\LogOut',
            ]
        ]
    ],
```





