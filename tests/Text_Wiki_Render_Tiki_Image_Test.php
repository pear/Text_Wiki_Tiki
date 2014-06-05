<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_Image_Test extends Text_Wiki_Render_Tiki_SetUp_Tests
{
    
    public function testTikiRenderImage()
    {
        $options = array('src' => 'src/image.jpg');
        $this->assertEquals('{img src="img/wiki_up/src/image.jpg"}', $this->t->token($options));
        $options = array('src' => 'src/image.jpg', 'attr' => array());
        $this->assertEquals('{img src="img/wiki_up/src/image.jpg"}', $this->t->token($options));
        $options = array('src' => 'src/image.jpg', 'attr' => array('width' => 600, 'height' => 500));
        $this->assertEquals('{img src="img/wiki_up/src/image.jpg" width="600" height="500"}', $this->t->token($options));

        $this->t->conf = array('prefix' => 'different/path/');
        $options = array('src' => 'image.jpg');
        $this->assertEquals('{img src="different/path/image.jpg"}', $this->t->token($options));
    }
    
}