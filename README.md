# Pimple Aware Controller

A Silex Service Provider to provide Pimple aware controllers


## Install

``` json
{
    "require": {
        "marcqualie/pimple-aware-controller": "dev-master"
    }
}
```


## Usage

``` php
// Controller/Base.php
namespace Controller;
class Base {
    public function __construct($app)
    {
        $this->app = $app;
    }
    public function display()
    {
        $this->app['twig']->render();
    }
}
```

``` php
// Controller/User.php
namespace Controller;
class User extends Base {
    public function create($app)
    {
        // create user code
        return $this->display();
    }
}
```

``` php
// bootstrap.php
$app->register(new PimpleAwareController\ServiceProvider());
$app->get('/user/create', 'Controller\User::create');
```


## Contributing

Pull requests are welcome at https://github.com/marcqualie/pimple-aware-controller
