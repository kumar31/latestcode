<?php
class Exception_test extends TestCase
{
        /**
         * @expectedException InvalidArgumentException
         */
        public function test_Exception()
        {
            throw new InvalidArgumentException('Some Message', 10); 
        }

}
