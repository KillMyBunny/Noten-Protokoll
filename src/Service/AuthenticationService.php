<?php

namespace App\Service;

use App\Controller\HomeController;
use App\Repository\UserRepository;
use RuntimeException;

class AuthenticationService
{
    public static function login($username, $password)
    {
        // Den Benutzer anhand der E-Mail oder des Benutzernamen auslesen

        $userRepository = new UserRepository();

        $user = $userRepository->readByUsername($username);

        if ($user != null)
        {
            // TODO: Mitgegebenes Passwort hashen
            $password_hash = hash('sha256', $password);
            // Prüfen ob der Password-Hash dem aus der Datenbank entspricht
            if ($password_hash == $user->password)
            {
                // Login successful
                // TODO: User-ID in die Session schreiben
                session_start();
                $_SESSION['id'] = $user->id;
                $_SESSION['userName'] = $user->username;
                return true;

            }

        }

        return false;
    }

    public static function logout()
    {
        // TODO: Mit unset die Session-Werte löschen
        unset($_SESSION['id']);
        // TODO: Session zerstören
        session_destroy();
    }

    public static function isAuthenticated()
    {
        //session_start();
        // TODO: Zurückgeben ob eine ID in der Session gespeichert wurde (true/false)
        return isset($_SESSION['id']);
    }

    public static function getAuthenticatedUser()
    {
        // TODO: User anhand der ID aus der Session auslesen
        get($_SESSION[id]);
        get($_SESSION[userName]);
        // TODO: User zurückgeben

    }

    public static function restrictAuthenticated() {
        if (!self::isAuthenticated()) {
            throw new RuntimeException("Sie haben keine Berechtigung diese Seite anzuzeigen.");
            // Unbefungte Zugriffsversuche sollten immer geloggt werden
            // z.B. mit error_log()
            exit();
        }
    }
}