<?php

class Control{

public static function under(array $users): array
{
return array_filter($users, function ($user) {
return $user->getAge() > 18;
});
}
}