<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Newline_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderNewline()
    {
        $options = array();
        $this->assertEquals("\n", $this->t->token($options));
    }
    
}