UI-Library-Template
===================

Using Mustache templates to create quickly deployed UI Libraries.

Content Parameters
==================

*title - The title of the section and it's name on the sub-menu
*sectionId - A unique section ID for JS purposes
*description - Main content of the section. Will parse HTML.
liveExample - Boolean Setting this parameter to true will include a live example of a component or behavior
liveDescription - Any text you want to include beneath the liveExample
liveContent - If liveExample => true, this will be the code for the live example. Will parse HTML.
codeExample - Boolean Will print out liveContent in <pre> tags, unparsed.
resources - Boolean Includes an "Additional Links and Resources" section.
links - An array of urls.
url - The href for a resource link.
beginMenuGroup - Boolean If this is true, it will add a menu group heading above the section in the side menu.
groupHeader - The name of the group heading.
