<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Emphasis_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderEmphasis()
    {
        $options = array();
        $this->assertEquals("''", $this->t->token($options));
    }
    
}