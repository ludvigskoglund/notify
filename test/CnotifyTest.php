<?php




class CNotifytest extends \PHPUnit_Framework_TestCase
{

 


    public function testInsertMessage()
{
 	
    $notify = new \Anax\notification\CNotify(new FakeSession());
    $res = $notify->insertMessage("test message");
    $exp = "<div class='alert alert-success' role='alert'>test message </div>";
    $this->assertEquals($res, $exp, "Something went wrong");
}

    public function testHasMessage()
{
 	
    $notify = new \Anax\notification\CNotify(new FakeSession());
    $res = $notify->hasMessage();
    $exp = true;
    $this->assertEquals($res, $exp, "Something went wrong");
}


    public function testShowMessage()
{
 	
    $notify = new \Anax\notification\CNotify(new FakeSession());
    $res = $notify->showMessage();
    $exp = null;
    $this->assertEquals($res, $exp, "Something went wrong");
}


}

class FakeSession
{
    private $sessionData = array();
    public function has($sessionVariable)
    {
        return isset($this->sessionData[$sessionVariable]);
    }
        public function set($sessionVariable, $allMessages)
    {
        $this->sessionData[$sessionVariable] = $allMessages;
    }
    
    public function get($sessionVariable)
    {
        if($this->sessionData != null && $this->sessionData[$sessionVariable] != null)
        return $this->sessionData[$sessionVariable];
        return null;
}
}










   



