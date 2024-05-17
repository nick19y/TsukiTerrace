<?php
namespace TsukiTerrace\MVC\Controller;

class LoginFormController implements Controller
{
    public function proccessRequest(): void
    {
        require_once __DIR__ . '/../../views/login-form.php';
    }
}