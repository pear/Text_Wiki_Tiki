<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Box_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderBox()
    {
        $options = array('type' => 'start');
        $this->assertEquals('^', $this->t->token($options));
        $options = array('type' => 'end');
        $this->assertEquals('^', $this->t->token($options));
    }
    
}