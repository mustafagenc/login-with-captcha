Captcha for laravel-admin
======

### Screenshot
![img](https://raw.githubusercontent.com/mustafagenc/login-with-captcha/master/screenshot.png?raw=true)


### Installation

```
composer require mustafagenc/login-with-captcha
```

### Configuration

In the extensions section of the `config/admin.php` file, add configurations
```
'extensions' => [
    'login-with-captcha' => [
        // set to false if you want to disable this extension
        'enable' => true,
    ]
]
```
    
In the `resources/lang/en/validation.php` file, add configurations
```
'captcha'    => 'The :attribute is invalid.',
'attributes' => [
    'captcha' => 'captcha',
],
```

If you need to modify the captcha configuration, please see [mews/captcha](https://github.com/mewebstudio/captcha)
And in the `config/captcha.php` file, add configurations
```
    'admin'   => [
        'length'    => 4,
        'width'     => 100,
        'height'    => 32,
        'quality'   => 95,
        'lines'     => 3,
        'bgImage'   => true,
        'invert'    => false,
        'bgColor'   => '#ecf2f4',
        'fontColors'=> ['#2c3e50', '#c0392b', '#16a085', '#c0392b', '#8e44ad', '#303f9f', '#f57c00', '#795548'],
        'contrast'  => -5,
        'angle'     => 12,
        'sharpen'   => 10,
    ],
```

### Usage

Open your login page in your browser


### License

Licensed under [The MIT License (MIT)](LICENSE).