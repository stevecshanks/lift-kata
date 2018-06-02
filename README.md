# Lift Kata

Problem for a [@podfather](https://github.com/podfather) kata event.

_Heavily_ inspired by [dinglemouse](https://www.codewars.com/users/dinglemouse)'s [problem on Codewars](http://www.codewars.com/kata/the-lift/)

## Problem

We want to replace the lift in the office with a shiny new lift we bought on eBay.  Problem is, it doesn't come with any software and just sits there when you push the buttons.  Luckily we've discovered the lift is capable of running PHP - how hard can it be?

## Setup

Make sure you have PHP and Composer installed on your machine.  Then clone this repo and run `composer install`.

You should then be able to run `./vendor/bin/phpunit` and see the tests pass (although the ones that verify your solution will be marked incomplete).

## Goal #1

At the very least, we need a lift that will pick up anyone waiting and take them to the right floor.  We'll represent the people waiting like this:

```php
$people = [
    new Person(0, 1),
    new Person(1, 2),
    new Person(1, 2),
];
```

In this example we have:

- 1 person waiting on Floor 0, wanting to go to Floor 1
- 2 people waiting on Floor 1 who want to go to Floor 2
- no-one waiting on Floor 2

The lift starts on Floor 0, and you can assume it's big enough to carry everyone at once.

We've already defined a `SimpleLift` class with a `movePeople` method that takes in the list of people:

```php
$lift = new SimpleLift();
$lift->movePeople($people);
```

You just need to fill in the method body.  You can move the lift to a floor by using `$this->moveTo($floor)`, and get someone to enter/exit the lift by using `$person->enter($this)` and `$person->exitLift()` respectively.

You can remove `$this->markTestIncomplete()` from `SimpleLiftTest`, which will let you test your solution.  Feel free to add tests of your own!
