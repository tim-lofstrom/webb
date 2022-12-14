=== User Specific Content ===
Contributors: bainternet,adsbycb 
Donate link:http://en.bainternet.info/donations
Tags: User content, user specific content,content by role, content by user
Requires at least: 2.9.2
Tested up to: 3.5.1
Stable tag: 0.9.7

This Plugin allows you to select specific users by user name, or by role name who can view a specific post content or page content.

== Description ==

This Plugin allows you to select specific users by user name, or by role name who can view a specific post content or page content.

Basically it adds a meta box to the post or page edit screen and lets the user select specific users by name or roles and then when you call that page content using “the\_content();” function it check using “the\_content” filter if the current user is one of the users you have selected or if his role match’s the roles you have selected and shows the content, otherwise it displays a message

**Features:**

*   You can select any number of Users you want by there names.
*   You can select any number of users Roles you want by there names.
*   Easy Customization of content blocked massage per post, or page.
*   Works with both posts, and pages.
*   Content to none logged in users only.
*   Setup global default blocked message. (NEW)
*   plugin blocks when using `the_content` filter and/or `the_excerpt` on admin selection.(NEW)
*	Simple admin Panel. (NEW)
*	Block Multiple contents on a single post/page for multiple users Using ShortCode. (NEW)



Any feedback or suggestions are welcome.

Also check out my <a href=\"http://en.bainternet.info/category/plugins\">other plugins</a>

 

== Installation ==

1.  Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation.
2.  Then activate the Plugin from Plugins page.
3.  Done!
== Frequently Asked Questions ==

= I have Found a Bug, Now what? =

Simply use the <a href=\"http://wordpress.org/tags/user-specific-content?forum_id=10\">Support Forum</a> and thanks a head for doing that.

= How can i Use the ShortCode to limit the content to a specific user id? =

Simply use:
`[O_U user_id="1"]Content goes here[/O_U]`
where 1 is the user id.
or to specify multiple users you can use:
`[O_U user_id="1,2,3"]Content goes here[/O_U]`
where 1,2,3 are different user ids.


= How can i Use the ShortCode to limit the content to a specific user name? =

Simply use:
`[O_U user_name="Bainternet"]Content goes here[/O_U]`
where Bainternet is the user name.
or to specify multiple users you can use:
`[O_U user_name="Bainternet,Steve,david"]Content goes here[/O_U]`
where Bainternet,Steve,david are different user names.

= How can i Use the ShortCode to limit the content to a specific user by role? =

Simply use:
`[O_U user_role="Administrator"]Content goes here[/O_U]`
where Administrator is the user role.
or to specify multiple user roles you can use:
`[O_U user_name="Administrator,Author,Contributor"]Content goes here[/O_U]`
where Administrator,Author,Contributor are different user roles.

= Can i use the shortcode more then once in a post? =

YES you can use it as many times as you want eg:
`[O_U user_role="Administrator"]admin content goes here[/O_U]
[O_U user_name="Bainternet,Steve,david"]specific users content goes here[/O_U]`

= Can i change the blocked massage for a specific shortcode? =

YES you can just add your blocked message as a shortcode parameter eg:
`[O_U user_role="Administrator" blocked_meassage="admins only!"]admin content goes here[/O_U]`


== Screenshots ==
1. User Specific Content metabox
2. User Specific Content settings panel

== Changelog ==
0.9.7 Added action filter to allow BuddyPress integration.

0.9.6 Fixed Typo in metabox description.

0.9.5 Fixed Global blocked message issue.

0.9.4 Fixed bug which caused role based limitation to break.

0.9.3 Added `user_specific_content_blocked` filter to allow insertion of login form or whatever else you want.

0.9.2 cleaned up code comments

0.9.1 Fixed Typo (thanks to Sean Nittner) added backwards compatible and GNU.

0.9 Added nested shortcode option.

0.8 quick bug fix.

0.7 Major update,Plugin rewritten in OOP,

New shortcode implemented.
New options panel to define User Specific MetaBox.
New admin panel.
Run filter on `the_content` as well as `the_excerpt`.

0.6 Fixed all wp_debug warnings.

0.5 Fixed wp_debug warnings.

0.4 added simply logged-in user content only!
quick fixed block by role bug.

0.3 
added none logged-in user content only!

0.2 
added pages support

0.1 
initial release