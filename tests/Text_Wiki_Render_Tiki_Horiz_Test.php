<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Horiz_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{    
    
    public function testTikiRenderHoriz()
    {
        $options = array();
        $this->assertEquals("\n---\n", $this->t->token($options));
    }
       
}