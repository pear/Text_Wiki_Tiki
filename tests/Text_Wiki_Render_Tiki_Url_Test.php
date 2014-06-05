<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Url_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderUrlMultiToken()
    {
        $options = array('type' => 'start', 'href' => 'http://example.com');
        $this->assertEquals('[http://example.com', $this->t->token($options));
        $options = array('type' => 'start', 'href' => 'http://example.com', 'text' => 'http://example.com');
        $this->assertEquals('[http://example.com', $this->t->token($options));
        $options = array('type' => 'start', 'href' => 'http://example.com', 'text' => 'Sample text');
        $this->assertEquals('[http://example.com|', $this->t->token($options));
        $options = array('type' => 'end');
        $this->assertEquals(']', $this->t->token($options));
    }
    
    public function testTikiRenderUrlSingleToken()
    {
        $options = array('href' => 'http://example.com');
        $this->assertEquals('[http://example.com]', $this->t->token($options));
        $options = array( 'href' => 'http://example.com', 'text' => 'http://example.com');
        $this->assertEquals('[http://example.com]', $this->t->token($options));
        $options = array( 'href' => 'http://example.com', 'text' => 'Sample text');
        $this->assertEquals('[http://example.com|Sample text]', $this->t->token($options));
    }
    
}
