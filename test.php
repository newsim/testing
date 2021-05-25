<?php
include 'calculatrice.php';

use PHPUnit\Framework\TestCase;

class Testcalul extends TestCase {

    public function sumTest() {
        $cal = new calcul();
        $res = $cal->sum(5, 5);
        $this->assertEquals(10, $res);
    }
    public function subsTest() {
        $cal = new calcul();
        $res = $cal->subs(5, 2);
        $this->assertEquals(15, $res);
    }
    public function multiplicationTest() {
        $cal = new calcul();
        $res = $cal->multiplication(9,9 );
        $this->assertEquals(81, $res);
    }
    public function testDivision() {
        $cal = new calcul();
        $res = $cal->div(10, 2);
        $this->assertEquals(5, $res);
    }

}