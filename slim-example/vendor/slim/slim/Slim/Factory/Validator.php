<?php

namespace Slim\Factory;


class Validator implements ValidatorInterface
{
    public function validate(array $course)
    {
        // BEGIN (write your solution here)

        // END
    }
}
interface ValidatorInterface
{
    // Return array of errors, or empty array if no errors
    public function validate(array $data);
}