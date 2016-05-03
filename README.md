# Rate System

## Supports

### 1) Like
### 2) Like (+1), Dislike(-1)
### 3) Rate with other number(e.x. 0 < rate <= 5 )
### 4) Rate with string ('good' , 'very good' , ...)

## Sample Usage
```php
require 'vendor/autoload.php';


use mhndev\Rate\Abstracts\Entity;
use mhndev\Rate\DiscreteNumberValue;
use mhndev\Rate\Interfaces\iRateableEntity;

class User
{
    use \mhndev\Rate\Traits\UserTrait;

    function doRate($value, iRateableEntity $entity)
    {
        echo 'rate is done in our storage system.';
    }
}

class Post extends Entity
{

}


$post = new Post();
$rateValue = (new DiscreteNumberValue())->setPossibleValues([1,2,3]);

$user = new User;
$user->setRateValue($rateValue)->rate(4, $post);

```