<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Code_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderCode()
    {
        $options = array('text' => 'Some code text as a sample');
        $this->assertEquals("{CODE()}\nSome code text as a sample\n{CODE}", $this->t->token($options));
        $options = array('text' => 'Some code text as a sample', 'attr' => array('type' => ''));
        $this->assertEquals("{CODE()}\nSome code text as a sample\n{CODE}", $this->t->token($options));
        $options = array('text' =>  'Some code text as a sample', 'attr' => array('type' => 'php'));
        $this->assertEquals("{CODE(colors=>php)}\nSome code text as a sample\n{CODE}", $this->t->token($options));
    }
    
}