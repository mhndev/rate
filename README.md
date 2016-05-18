# Rate System

## Supports

### 1) Like
### 2) Like (+1), Dislike(-1)
### 3) Rate with other number(e.x. 0 < rate <= 5 )
### 4) Rate with string ('good' , 'very good' , ...)

## Sample Usage
```php
use mhndev\rate\Abstracts\Entity;
use mhndev\rate\DiscreteNumberValue;
use mhndev\rate\Interfaces\iRateableEntity;

class User
{
    use \mhndev\rate\Traits\UserTrait;

    function doRate($value, iRateableEntity $entity)
    {
        echo 'rate is done in our storage system.';
    }
}

class Post extends Entity
{

}


class Comment extends Entity
{

}


$rateValue = (new DiscreteNumberValue())->setPossibleValues([1,2,3]);
$post = (new Post())->setRateValue($rateValue);

$rateValue = (new DiscreteNumberValue())->setPossibleValues([-1,1]);
$comment = (new Comment())->setRateValue($rateValue);

$user = new User;
$user->rate(3, $post);
$user->rate(1,$comment);


```
