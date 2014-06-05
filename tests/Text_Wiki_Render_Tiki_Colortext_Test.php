<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Colortext_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderColortext()
    {
        $options = array('type' => 'start', 'color' => 'red');
        $this->assertEquals('~~red:', $this->t->token($options));
        $options = array('type' => 'start', 'color' => 'FFFFFF');
        $this->assertEquals('~~#FFFFFF:', $this->t->token($options));
        $options = array('type' => 'end');
        $this->assertEquals('~~', $this->t->token($options));
    }
    
}