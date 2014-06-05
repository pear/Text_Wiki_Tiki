<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Preformatted_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderPreformatted()
    {
        $options = array('text' => 'Some preformatted text');
        $this->assertEquals('~pp~Some preformatted text~/pp~', $this->t->token($options));
    }
    
}