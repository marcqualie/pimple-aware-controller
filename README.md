# Pimple Aware Controller

This is a Silex service provider to provider Pimple aware controllers


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
// bootstrap.php
$app->register(new PimpleAwareController\ServiceProvider());
$app->get('/user/create', 'Controller\User::create');
```

``` php
// Controller/Base.php
namespace Controller;
class Base {
    public function __construct()
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
