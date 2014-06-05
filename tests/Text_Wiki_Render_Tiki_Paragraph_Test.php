<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Paragraph_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderParagraph()
    {
        $options = array('type' => 'start');
        $this->assertEquals('', $this->t->token($options));
        $options = array('type' => 'end');
        $this->assertEquals("\n\n", $this->t->token($options));
    }
    
}
