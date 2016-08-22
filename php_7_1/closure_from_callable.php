<?php
// you can now create Closure instances directly from a callable

class Validator
{
    public function getValidatorCallback($validationType)
    {
        if ($validationType == 'email') {
            return Closure::fromCallable([$this, 'emailValidation']);
        }

        return Closure::fromCallable([$this, 'otherValidation']);
    }

    private function emailValidation($userData)
    {
        return filter_var($userData, FILTER_VALIDATE_EMAIL);
    }

    private function otherValidation($userData)
    {
        return preg_match('/[^!"£$%^&*/', $userData);
    }
}

$data = ['doug@unlikelysource.com', 'bad'];
$emailValidator = (new Validator())->getValidatorCallback('email');
foreach ($data as $email) {
    echo $email . ' is ' . (($emailValidator($email)) ? 'VALID' : 'INVALID');
    echo PHP_EOL;
}
