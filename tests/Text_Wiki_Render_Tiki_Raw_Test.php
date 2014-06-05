<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Raw_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderRaw()
    {
        $options = array('text' => 'Some raw text');
        $this->assertEquals('~np~Some raw text~/np~', $this->t->token($options));
    }
    
}