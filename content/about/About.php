<?php

foreach (glob("content/about/sections/*.php") as $filename)
{
    include_once $filename;
}

class About
{

    public $pageName = "About:";

    public function sections()
    {
		global $what, $team, $how;
		
        return array(
			//What is it section (what.php)
			$what,
			//How to use (how.php)
            $how,
			//Our Team (team.php)
            $team,
        );
    }

   
}
