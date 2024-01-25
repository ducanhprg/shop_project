<?php

class UserLogout
{
    public function logout()
    {
        session_destroy();
        redirect('../../views/backend/login.php');
    }
}