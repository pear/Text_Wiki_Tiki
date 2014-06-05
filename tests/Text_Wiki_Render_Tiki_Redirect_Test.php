<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Redirect_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderRedirect()
    {
        $options = array('type' => 'start', 'text' => 'Some wiki link');
        $this->assertEquals('{redirect page="', $this->t->token($options));

        $options = array('type' => 'end');
        $this->assertEquals('"}', $this->t->token($options));
    }
    
}