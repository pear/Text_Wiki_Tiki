<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Break_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderBreak()
    {
        $options = array();
        $this->assertEquals("\n", $this->t->token($options));
    }
    
}
