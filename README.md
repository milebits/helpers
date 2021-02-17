# Milebits Helpers
A new laravel package including helper functions for every Milebits package.
# How to install
```
composer require milebits/helpers
```
# Available methods
#### Check if a constant exists within a class: 
```
constExists($class, $constant): bool
```
- Example: `constExists(App\Models\User::class, "CREATED_AT")` will result in `true`
- Example: `constExists($user, "CREATED_AT")` will result in `true`
- Example: `constExists(App\Models\User::class, "RANDOM_VAR")` will result in `false`
- Example: `constExists($user, "RANDOM_VAR")` will result in `false`
#### Get the value of a constant or get default: 
```
constVal($class, $constant, $default): mixed
```
- Example: `constVal(App\Models\User::class, "CREATED_AT", "JAJA")` will result in `created_at`
- Example: `constVal($user, "CREATED_AT", "JAJA")` will result in `created_at`
- Example: `constVal(App\Models\User::class, "RANDOM_VAR", "JAJA")` will result in `JAJA`
- Example: `constVal($user, "RANDOM_VAR", "JAJA")` will result in `JAJA`
- Example: `constVal(App\Models\User::class, "RANDOM_VAR")` will result in `null`
- Example: `constVal($user, "RANDOM_VAR")` will result in `null`
#### Get the value of a static property or get default: 
```
staticPropVal($class, $name, $default): mixed
```
- Example: `staticPropVal(App\Models\User::class, "STATICPROP", "JAJA")` will result in the value of the property requested.
- Example: `staticPropVal($user, "STATICPROP", "JAJA")` will result in the value of the property requested.
- Example: `staticPropVal(App\Models\User::class, "NONSTATIC", "JAJA")` will result in `JAJA`
- Example: `staticPropVal($user, "NONSTATIC", "JAJA")` will result in `JAJA`
- Example: `staticPropVal(App\Models\User::class, "NONSTATIC")` will result in `null`
- Example: `staticPropVal($user, "NONSTATIC")` will result in `null`

#### Get the value of a property or get default: 
```
propVal($class, $name, $default): mixed
```
- Example: `propVal(App\Models\User::class, "prop", "JAJA")` will result in the value of the property requested.
- Example: `propVal($user, "prop", "JAJA")` will result in the value of the property requested.
- Example: `propVal(App\Models\User::class, "non_prop", "JAJA")` will result in `JAJA`
- Example: `propVal($user, "non_prop", "JAJA")` will result in `JAJA`
- Example: `propVal(App\Models\User::class, "non_prop")` will result in `null`
- Example: `propVal($user, "non_prop")` will result in `null`

#### Check if a class has a certain trait
```
hasTrait($object, $trait): bool
```
- Example: `hasTrait($user, SoftDeletes::class)` will return true if the user has the SoftDeletes Trait.
- Example: `hasTrait($user, HasPosts::class)` will return true if the user hasn't got the HasPosts Trait
- Example: `hasTrait(App\Models\User, SoftDeletes::class)` will return true if the user class has the SoftDeletes Trait.
- Example: `hasTrait(App\Models\User, HasPosts::class)` will return true if the user class hasn't got the HasPosts Trait.

# Contributions
If in any case while using this package, and you which to request a new functionality to it, please contact us at suggestions@os.milebits.com and mention the package you are willing to contribute or suggest a new functionality.

# Vulnerabilities
If in any case while using this package, you encounter security issues or security vulnerabilities, please do report them as soon as possible by issuing an issue here in Github or by sending an email to security@os.milebits.com with the mention **Vulnerability Report milebits/helpers** as your subject.