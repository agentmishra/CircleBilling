<?php
/**
 * @group Core
 */
class Box_Mod_Example_Api_ClientTest extends BBDbApiTestCase
{
    protected $_mod = 'example';
    protected $_initialSeedFile = 'mod_example.xml';
    
    public function testExample()
    {
        $this->api_admin->extension_activate(array('id'=>'example', 'type'=>'mod'));
        
        $array = $this->api_client->example_get_info();
        $this->assertInternalType('array', $array);
    }
}