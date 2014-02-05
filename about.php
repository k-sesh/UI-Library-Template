<?

//Variables
$page = "About";


//Include the header.
include '/includes/header.php';
//Gentlemen, start your mustaches.
include 'start_mustache.php'; 

//Require the page content.
require dirname(__FILE__).'/content/about/About.php';
//Initialize your mustache engine and loaders.
$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views'),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views/partials'),
));


//Set the template you want to use (this is the name of the mustache template file).
$template = "sections";
//Set the content you want to use (this is the name of your content PHP file).
$content = new About;


//Render that shit.
echo $m->render($template, $content);

//Don't forget to include your footer, too.
include '/includes/footer.php';

