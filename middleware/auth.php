<?php
const LOGIN_URL = "/pages/auth/login.php";
const BOOK_INDEX_URL = "/pages/books/index.php";
const FORBIDDEN_URL ="/pages/errors/403.php";


function sessionStart()
{
    if (session_status() == PHP_SESSION_NONE ){
        session_start();
    }
}


function isLoggedIn()
{
    session_start();
    $isLoggedIn = isset($_SESSION['user']);

    return $isLoggedIn;
}


function getAuthUser()
{
    sessionStart();
    $user = $_SESSION['user'] ?? null; 
    
    return $user;
}


function hasRole(array $roles)
{
    $user = getAuthUser();

    $isUserHasAuthorizeRole = $user != null && in_array($user['role'], $roles) ; 

    return $isUserHasAuthorizeRole;
}


function requireAuth()
{
    if(!isLoggedIn()){
        $_SESSION['errors'] = [
            'login' => 'silakan login terlebih dahulu sebelum mengakses halaman ini'
        ];

        header('location: ' . LOGIN_URL);
        exit;
    }
}


function requireRole(array $roles)
{
    requireAuth();

    if(!hasRole($roles)){
        header('location: ' . FORBIDDEN_URL);
        exit;
    }
}


function requireGuest()
{
    if(isLoggedIn()){
        header('location: ' . BOOK_INDEX_URL);
        exit;
    }
}



?>