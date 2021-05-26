<?php

include 'user.php';

use PHPUnit\Framework\TestCase;

class Testuser extends TestCase {


    private function testUserConstructor() : void {

        $user = new User("simon.amoyal@icloud.com", "AMOYAL", 24);

        //verifier les infos 
        $this->assertEquals($user->getEmail(), "simon.amoyal@icloud.com");
        $this->assertEquals($user->getName(), "AMOYAL");
        $this->assertEquals($user->getAge(), 24);

    }

}
