<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Table_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderTable()
    {
        /* test cases that doesn't depend on the static variable $last */
        $options = array('type' => 'table_start');
        $this->assertEquals('||', $this->t->token($options));

        $options = array('type' => 'table_end');
        $this->assertEquals('||', $this->t->token($options));

        $options = array('type' => 'row_end');
        $this->assertEquals('', $this->t->token($options));

        $options = array('type' => 'cell_end', 'span' => 1);
        $this->assertEquals('', $this->t->token($options));

        $options = array('type' => 'cell_end', 'span' => 4);
        $this->assertEquals(' |  |  | ', $this->t->token($options));

        $options = array('type' => 'cell_end');
        $this->assertEquals('', $this->t->token($options));
    }
    
    public function testTikiRenderTableDependLastVariable()
    {
        /* test cases that depend on the static variable $last. we run token()
           with a different type first to set the appropiate $last value and then 
           we run it again we the desirable assert value */
        $options = array('type' => 'table_start');
        $this->t->token($options);
        $options = array('type' => 'row_start');
        $this->assertEquals('', $this->t->token($options));


        $options = array('type' => 'cell_end');
        $this->t->token($options);
        $options = array('type' => 'cell_start');
        $this->assertEquals(' | ', $this->t->token($options));
    }

}