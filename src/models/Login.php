<?php 
loadModel('User');
// The login class extends model since it has login info and other data.

class Login extends Model {

    public function checkLogin() {
        $user = User::getOne(['email' => $this->email]);
        if ($user) {
            if(password_verify($this->password, $user->password)) {
                return $user;
            }
        }
        throw new Exception();
    }
}