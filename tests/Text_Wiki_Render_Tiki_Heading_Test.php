<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Heading_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{    
    
    public function testTikiRenderHeading()
    {
        $options = array('type' => 'start', 'level' => 1);
        $this->assertEquals("!", $this->t->token($options));
        $options = array('type' => 'start', 'level' => 2);
        $this->assertEquals("!!", $this->t->token($options));
        $options = array('type' => 'start', 'level' => 6);
        $this->assertEquals("!!!!!!", $this->t->token($options));
        $options = array('type' => 'end');
        $this->assertEquals("\n", $this->t->token($options));
    }
       
}