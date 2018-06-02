# Lift Kata

Problem for a [@podfather](https://github.com/podfather) kata event.

_Heavily_ inspired by [dinglemouse](https://www.codewars.com/users/dinglemouse)'s [problem on Codewars](http://www.codewars.com/kata/the-lift/)

## Problem

We want to replace the lift in the office with a shiny new lift we bought on eBay.  Problem is, it doesn't come with any software and just sits there when you push the buttons.  But luckily we've discovered the lift is capable of running PHP...

## Goal #1

At the very least, we need a lift that will pick up anyone waiting and take them to the right floor.  We'll represent the people waiting like this:

```php
$queues = [
    [1],
    [2, 2],
    []
];
```

In this example we have:

- 1 person waiting on Floor 0, wanting to go to Floor 1
- 2 people waiting on Floor 1 who want to go to Floor 2
- no-one waiting on Floor 2

The lift starts on Floor 0, and you can assume it's big enough to carry everyone at once.
