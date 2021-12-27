<?php
class MyException extends Exception{

}
class NetworkException extends Exception{
    
}

function testException(){
    throw new NetworkException();
}

try{
    testException();
}catch(Exception $e){
    echo "Exception Caught\n";
}catch(MyException $e){
    echo "MyException Caught\n";
}catch(NetworkException $e){
    echo "NetworkException Caught\n";
}finally{
    echo "Cleaned Up\n";
}