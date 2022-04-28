<?php

//function yg menggunakan kata kunci final tidak bisa di extend dan tidak bisa di override di child class

class SocialMedia {
    public string $name;
}

class Facebook extends SocialMedia {
    final public function login() {}
}

//error
// class FakeFacebook extends Facebook {
//     public function login() {}
// }