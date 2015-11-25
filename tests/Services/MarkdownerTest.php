<?php
/**
 *
 */
class MarkdownerTest extends TestCase
{
    protected $markdown;

    public function setup()
    {
        # code...
        $this->markdown = new \App\Services\Markdowner();
    }

    public function testSimpleParagraph()
    {
        # code...
        $this->assertEquals(
            "<p>test</p>\n",
            $this->markdown->toHTML('test')
        );
    }
}


 ?>
