<?php

class SignupContr extends Signup
{
    private string $uid;
    private string $pwd;
    private string $pwdRepeat;
    private string $email;

    public function __construct(string $uid, string $pwd, string $pwdRepeat, string $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    public function signupUser(): void
    {
        if($this->emptyInput() === false){
            // echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        if($this->invalidUid() === false){
            // echo "Invalid username!";
            header("location: ../index.php?error=invalidusername");
            exit();
        }

        if($this->invalidEmail() === false){
            // echo "Invalid email!";
            header("location: ../index.php?error=invalidemail");
            exit();
        }

        if($this->pwdMatch() === false){
            // echo "Passwords don't match!";
            header("location: ../index.php?error=passwordmatch");
            exit();
        }

        if($this->uidTakenCheck() === false){
            // echo "Username or email taken!";
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput(): bool
    {
        $result = null;
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)){
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }

    private function invalidUid(): bool
    {
        $result = null;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(): bool
    {
        $result = null;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }

    private function pwdMatch(): bool
    {
        $result = null;
        if($this->pwd !== $this->pwdRepeat){
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck(): bool
    {
        $result = null;
        if(!$this->checkUser($this->uid, $this->email)){
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }
}