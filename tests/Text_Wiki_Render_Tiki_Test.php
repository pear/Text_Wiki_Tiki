<?php
require_once 'Text/Wiki/Tiki.php';
require_once 'Text/Wiki/Render/Tiki.php';
require_once 'Text/Wiki/Render/Tiki/Anchor.php';
require_once 'Text/Wiki/Render/Tiki/Blockquote.php';
require_once 'Text/Wiki/Render/Tiki/Bold.php';
require_once 'Text/Wiki/Render/Tiki/Box.php';
require_once 'Text/Wiki/Render/Tiki/Break.php';
require_once 'Text/Wiki/Render/Tiki/Center.php';
require_once 'Text/Wiki/Render/Tiki/Code.php';
require_once 'Text/Wiki/Render/Tiki/Colortext.php';
require_once 'Text/Wiki/Render/Tiki/Deflist.php';
require_once 'Text/Wiki/Render/Tiki/Delimiter.php';
require_once 'Text/Wiki/Render/Tiki/Embed.php';
require_once 'Text/Wiki/Render/Tiki/Emphasis.php';
require_once 'Text/Wiki/Render/Tiki/Freelink.php';
require_once 'Text/Wiki/Render/Tiki/Function.php';
require_once 'Text/Wiki/Render/Tiki/Heading.php';
require_once 'Text/Wiki/Render/Tiki/Horiz.php';
require_once 'Text/Wiki/Render/Tiki/Html.php';
require_once 'Text/Wiki/Render/Tiki/Image.php';
require_once 'Text/Wiki/Render/Tiki/Include.php';
require_once 'Text/Wiki/Render/Tiki/Interwiki.php';
require_once 'Text/Wiki/Render/Tiki/Italic.php';
require_once 'Text/Wiki/Render/Tiki/List.php';
require_once 'Text/Wiki/Render/Tiki/Newline.php';
require_once 'Text/Wiki/Render/Tiki/Paragraph.php';
require_once 'Text/Wiki/Render/Tiki/Phplookup.php';
require_once 'Text/Wiki/Render/Tiki/Prefilter.php';
require_once 'Text/Wiki/Render/Tiki/Preformatted.php';
require_once 'Text/Wiki/Render/Tiki/Raw.php';
require_once 'Text/Wiki/Render/Tiki/Redirect.php';
require_once 'Text/Wiki/Render/Tiki/Revise.php';
require_once 'Text/Wiki/Render/Tiki/Strong.php';
require_once 'Text/Wiki/Render/Tiki/Subscript.php';
require_once 'Text/Wiki/Render/Tiki/Superscript.php';
require_once 'Text/Wiki/Render/Tiki/Table.php';
require_once 'Text/Wiki/Render/Tiki/Tighten.php';
require_once 'Text/Wiki/Render/Tiki/Toc.php';
require_once 'Text/Wiki/Render/Tiki/Tt.php';
require_once 'Text/Wiki/Render/Tiki/Underline.php';
require_once 'Text/Wiki/Render/Tiki/Url.php';
require_once 'Text/Wiki/Render/Tiki/Wikilink.php';

class Text_Wiki_Render_Tiki_Test extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $obj = new Text_Wiki_Tiki();
        $this->t = new Text_Wiki_Render_Tiki($obj);
    }

    public function testTikiRenderPre()
    {
        $this->assertEquals('', $this->t->pre());
    }

    public function testTikiRenderPost()
    {
        $this->assertEquals('', $this->t->post());
    }

}