<?php
require_once 'tests/Text_Wiki_Render_Tiki_SetUp_Tests.php';
class Text_Wiki_Render_Tiki_SetUp_Tests extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $obj = new Text_Wiki_Tiki();
        $testClassName = get_class($this);
        $ruleName = preg_replace('/Text_Wiki_Render_Tiki_(.+?)_Test/', '\\1', $testClassName);
        $className = 'Text_Wiki_Render_Tiki_' . $ruleName;
        $this->t = new $className($obj);
    }

}