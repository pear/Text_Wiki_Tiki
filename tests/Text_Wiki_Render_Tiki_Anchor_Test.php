<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Anchor_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderAnchor()
    {
        $options = array('type' => 'start', 'name' => 'Page name');
        $this->assertEquals('((Page name', $this->t->token($options));
        $options = array('type' => 'end');
        $this->assertEquals('))', $this->t->token($options));
    }
    
}
