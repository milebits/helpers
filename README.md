# Milebits Helpers

A new laravel package including helper functions for every Milebits package.

# How to install

```bash
composer require milebits/helpers
```

# Available methods

#### Check if a constant exists within a class:

```php
use Illuminate\Support\Facades\Auth;
use function Milebits\Helpers\Helpers\constExists;

$exists = constExists("App\Models\User", 'constant');
$exists = constExists(Auth::user(), 'constant');
```

#### Get the value of a constant or get default:

```php
use Illuminate\Support\Facades\Auth;
use function Milebits\Helpers\Helpers\constVal;

$value = constVal(Auth::user(), 'CONSTANT', 'default Value, can be anything');
$value = constVal("App\Models\User", 'CONSTANT', 'default Value, can be anything');
```

#### Get the value of a static property or get default:

```php
use Illuminate\Support\Facades\Auth;
use function Milebits\Helpers\Helpers\staticPropVal;

$value = staticPropVal(Auth::user(), "StaticProp", 'default value');
$value = staticPropVal("App\Models\User", "StaticProp", 'default value');
```

#### Get the value of a property or get default:

```php
use Illuminate\Support\Facades\Auth;
use function Milebits\Helpers\Helpers\propVal;

$value = propVal(Auth::user(), 'Property', 'default value');
$value = propVal("App\Models\User", 'Property', 'default value');
```

#### Check if a class has a certain trait

```php
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use function Milebits\Helpers\Helpers\hasTrait;

$hasSoftDeletes = hasTrait(Auth::user(), SoftDeletes::class);
$hasSoftDeletes = hasTrait("App\Models\User", SoftDeletes::class);
```

#### Wrap something in an array

```php
use function Milebits\Helpers\Helpers\array_wrap;

$value = "test";
$array = ["arrayItem"];

$wrap = array_wrap($value);
$wrap = array_wrap($array);
```

# Contributions

If in any case while using this package, and you which to request a new functionality to it, please contact us at
suggestions@os.milebits.com and mention the package you are willing to contribute or suggest a new functionality.

# Vulnerabilities

If in any case while using this package, you encounter security issues or security vulnerabilities, please do report
them as soon as possible by issuing an issue here in Github or by sending an email to security@os.milebits.com with the
mention **Vulnerability Report milebits/helpers** as your subject.