<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Underline_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderUnderline()
    {
        $options = array();
        $this->assertEquals('===', $this->t->token($options));
    }
    
}