<?php

class Sections
{

    public $pageName = "Components:";

    public function sections()
    {
		//global $accordion, $dragNdrop, $css;
		
        return array(
			//Accordion Section
            array(	'title' 		=> "Accordion", 
					'sectionId' 	=> "accordion",
					'liveExample'	=> true,
					'codeExample'	=> true,
					'description' 	=> "<p>Herp Derp</p>",
					'liveContent'	=> '<div class="well"><span>shanaynays party</span></div>',
			),
			//Drag and Drop Section
            array(	'title' 		=> "Drag and Drop", 
					'description' 	=> "this is a description",
					'sectionId' 	=> "dragAndDrop",
					'liveExample'	=> true,
					'liveContent'	=> "<div class='well'><span>a drag and drop example</span></div>",
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
					'description' 	=> "<p>Woop Woop this is markup yeaaaaaaaa</p>",
					'sectionId' 	=> "css"
			),
			array(	'title' 		=> "CSS", 
					'description' 	=> "<p>Woop Woop this is markup yeaaaaaaaa</p>",
					'sectionId' 	=> "css"
			),
        );
    }

   
}
