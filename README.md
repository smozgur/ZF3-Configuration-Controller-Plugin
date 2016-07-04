## ZF3 - Controller Plugin for Configuration Array Access
Plugin to access configuration arrays in controllers.

Simply use a controller plugin to access configuration arrays by using one line of code:

``` 
public function indexAction()
{
   return new ViewModel(['itemsPerPage' => $this->application()->getSettings()->pagination->itemsPerPage]);
}
``` 
