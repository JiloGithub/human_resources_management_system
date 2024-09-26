<?php

class Redirect
{
    public static function to($destination, $message = null, $message_type = null)
    {
        $_SESSION['message'] = $message;
        $_SESSION['message_type'] = $message_type;
        header('location:' . $destination . '.php');
        exit;
    }
}
