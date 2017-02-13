 <?php
 require_once "src/queen.php";

 class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_canAttack_Horizontal()
        {
            $test_canAttack = new Queen;
            $input1 = array(0,0);
            $input2 = array(0,1);

            $result = $test_canAttack->canAttack($input1,$input2);

            $this->assertEquals("Yes" , $result);
        }

        function test_canAttack_Vertical()
        {
            $test_canAttack = new Queen;
            $input1 = array(0,1);
            $input2 = array(2,1);

            $result = $test_canAttack->canAttack($input1,$input2);

            $this->assertEquals("Yes" , $result);
        }


    }




  ?>
