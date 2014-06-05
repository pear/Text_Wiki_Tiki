<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Delimiter_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderDelimiter()
    {
        $options = array('text' => 'Sample text');
        $this->assertEquals('Sample text', $this->t->token($options));
    }
    
}