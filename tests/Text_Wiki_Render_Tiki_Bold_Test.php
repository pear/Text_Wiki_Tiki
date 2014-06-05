<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Bold_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderBold()
    {
        $options = array();
        $this->assertEquals('__', $this->t->token($options));
    }
    
}
