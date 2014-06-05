<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Italic_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderItalic()
    {
        $options = array();
        $this->assertEquals("''", $this->t->token($options));
    }
    
}
