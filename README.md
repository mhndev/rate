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

    /**
     * @param $value
     * @param iRateableEntity $entity
     * @param $type
     */
    function doRate($value, iRateableEntity $entity, $type)
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
$post->setPossibleRateTypes(['like', 'rate']);


$rateValue = (new DiscreteNumberValue())->setPossibleValues([-1,1]);
$comment = (new Comment())->setRateValue($rateValue);

// by default possible rate types are "rate" and "like" so if you want your rate types to be just like default you don't need to call setPossibleRateTypes method on entity pbject

$post->setPossibleRateTypes(['like', 'rate', 'test']);
//or
Post::setPossibleRateTypes(['like', 'rate', 'test']);


$user = new User;

$user->rate(3, $post);
$user->like($post);
$user->rate(1,$comment);
$user->dislike($comment);


```


