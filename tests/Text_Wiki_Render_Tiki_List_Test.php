<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_List_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderNumberItemStart()
    {
        $options = array('type' => 'number_item_start', 'level' => 1);
        $this->assertEquals("#", $this->t->token($options));
        $options = array('type' => 'number_item_start', 'level' => 3);
        $this->assertEquals("###", $this->t->token($options));
    }

    public function testTikiRenderBulletItemStart()    
    {
        $options = array('type' => 'bullet_item_start', 'level' => 1);
        $this->assertEquals("*", $this->t->token($options));
        $options = array('type' => 'bullet_item_start', 'level' => 3);
        $this->assertEquals("***", $this->t->token($options));
    }

    public function testTikiRenderBulletAndNumberedListEnd()
    {
        $options = array('type' => 'bullet_list_end', 'level' => 0);
        $this->assertEquals("\n", $this->t->token($options));
        $options = array('type' => 'number_list_end', 'level' => 0);
        $this->assertEquals("\n", $this->t->token($options));
        $options = array('type' => 'bullet_list_end', 'level' => 1);
        $this->assertEquals("", $this->t->token($options));
        $options = array('type' => 'number_list_end', 'level' => 1);
        $this->assertEquals("", $this->t->token($options));
    }

    public function testTikiRenderBulletAndNumberedListStart()
    {
        $options = array('type' => 'bullet_list_start');
        $this->assertEquals("", $this->t->token($options));
        $options = array('type' => 'number_list_start');
        $this->assertEquals("", $this->t->token($options));
    }

    public function testTikiRenderBullerAndNumberedItemEnd()
    {
        $options = array('type' => 'bullet_item_end');
        $this->assertEquals("\n", $this->t->token($options));
        $options = array('type' => 'number_item_end');
        $this->assertEquals("\n", $this->t->token($options));
    }
    
}