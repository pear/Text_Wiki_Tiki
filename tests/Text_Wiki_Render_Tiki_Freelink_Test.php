<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Freelink_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{    
    
    public function testTikiRenderFreelink()
    {
        $options = array('type' => 'start', 'page' => 'Sample page', 'text' => 'Sample text');
        $this->assertEquals('((Sample page|', $this->t->token($options));
        $options = array('type' => 'end');
        $this->assertEquals('))', $this->t->token($options));
        $options = array('page' => 'Sample page', 'text' => 'Sample text');
        $this->assertEquals('((Sample page|Sample text))', $this->t->token($options));
    }
       
}