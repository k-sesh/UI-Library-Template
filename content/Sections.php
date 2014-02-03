<?php

$accordion = "<div class='well'><span>shanaynay</span></div>";
$dragNdrop = "<div class='well'><span>a drag and drop example</span></div>";
$css = "<div class='well'><span>css example</span></div>";

class Sections
{

    public $pageName = "Components:";

    public function sections()
    {
		global $accordion, $dragNdrop, $css;
		
        return array(
			//Accordion Section
            array(	'title' 		=> "Accordion", 
					'description' 	=> 
						array(
							array('paragraph' 	=> 'This is the first paragraph.'),
							array('paragraph' 	=> 'This is the second paragraph.'),
							array('paragraph' 	=> 'This is the third paragraph.'),
						),
					'sectionId' 	=> "accordion",
					'liveExample'	=> true,
					'liveContent'	=> $accordion,
					'codeExample'	=> true,
			),
			//Drag and Drop Section
            array(	'title' 		=> "Drag and Drop", 
					'description' 	=> 
						array(
							array('paragraph' 	=> 'Drag and drop is fun for the whole family'),
						),
					'sectionId' 	=> "dragAndDrop",
					'liveExample'	=> true,
					'liveContent'	=> $dragNdrop,
					'codeExample'	=> true,
					'resources'		=> true,
					'links' 	=> 
						array(
							array('url' 	=> 'http://ui-patterns.com/patterns/AccordionMenu'),
							array('url' 	=> 'http://developer.yahoo.com/ypatterns/navigation/accordion.html'),
						),
			),
			//CSS Section
            array(	'title' 		=> "CSS", 
					'description' 	=> 
						array(
							array('paragraph' 	=> 'Yummy, delicious Cascading Style Sheets.'),
							array('paragraph' 	=> 'Part of a complete breakfast!'),
						),
					'sectionId' 	=> "css"
			),
        );
    }

    public $empty = false;
}
