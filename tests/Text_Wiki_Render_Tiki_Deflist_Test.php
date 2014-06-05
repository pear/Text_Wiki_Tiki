<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Deflist_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderDeflist()
    {
        $options = array('type' => 'list_start');
        $this->assertEquals("{DL()}\n", $this->t->token($options));
        $options = array('type' => 'list_end');
        $this->assertEquals("{DL}\n\n", $this->t->token($options));
        $options = array('type' => 'term_start');
        $this->assertEquals('', $this->t->token($options));
        $options = array('type' => 'term_end');
        $this->assertEquals(': ', $this->t->token($options));
        $options = array('type' => 'narr_start');
        $this->assertEquals('', $this->t->token($options));
        $options = array('type' => 'narr_end');
        $this->assertEquals("\n", $this->t->token($options));

        // test definition item without definition narrative
        $this->t->token(array('type' => 'term_end'));
        $this->assertEquals('term_end', $this->t->last);
        $options = array('type' => 'term_start');
        $this->assertEquals("\n", $this->t->token($options));
        $this->assertEquals('term_start', $this->t->last);

        // test default swicth behavior
        $options = array('type' => 'InvalidType');
        $this->assertEquals('', $this->t->token($options));
    }
    
}