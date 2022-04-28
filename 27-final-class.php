<?php

//class yg menggunakan kata kunci final tidak bisa di extend

class SocialMedia {
    public string $name;
}

final class Facebook extends SocialMedia {
}

//error
// class FakeFacebook extends Facebook {
// }