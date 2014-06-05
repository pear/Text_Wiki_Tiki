<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Toc_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderToc()
    {
        $options = array();
        $this->assertEquals("\n{maketoc}\n", $this->t->token($options));
    }
    
}