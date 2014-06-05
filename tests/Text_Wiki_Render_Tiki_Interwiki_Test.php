<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Interwiki_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderInterwiki()
    {
        $this->markTestIncomplete('Check if Text_Wiki_Render_Tiki_Interwiki output a valid Tiki syntax.');
        $options = array('site' => 'doc.tikiwiki.org', 'page' => 'WikiSyntax');
        $this->assertEquals('((doc.tikiwiki.org:WikiSyntax))', $this->t->token($options));
        $options = array('site' => 'doc.tikiwiki.org', 'page' => 'WikiSyntax', 'text' => 'Page WikiSyntax from doc.tikiwiki.org');
        $this->assertEquals('((doc.tikiwiki.org:WikiSyntax|Page WikiSyntax from doc.tikiwiki.org))', $this->t->token($options));
    }
    
}