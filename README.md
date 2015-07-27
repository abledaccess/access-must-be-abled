# access must be abled

This repository contains an entire WordPress installation and a customized version of the 2014 default theme TwentyFourteen, cleverly rebranded abledtwentyfourteen. So the over arching point of this project is to tweak the inclusive features of the TwentyFourteen theme towards the better. But with the added benefit -- or goal -- to allow open criticism, transparent discussion and hopefully an opportunity to learn from mistakes. Hence the title of this repo: Access Must Be Abled.

Be aware: the `wp-content` folder has been renamed `abled-content`. Aside from that name change and [a few lines code instructing WordPress of that change](http://codex.wordpress.org/Editing_wp-config.php#Moving_wp-content_folder), everything is as it should be with any WordPress installation. Meaning abledtwentyfourteen resides in the `themes` directory within the renamed `abled-content` folder.

## abledtwentyfourteen Features

Essentially all these "features" are is additions to the Twenty Fourteen theme that either help me maintain the theme or make what I feel are stronger statements toward accessibility.

- Syntactically Awesome Style Sheets (Sass) functionality.
- "Context helpers". More and better placed information to help users, screen reader users specifically, understand to what and where certain phrases/ links belong. For example, the words appearing above post titles and to the left off post tags are in fact categories and tags respectively, which the post has been filed under.
- And a post's categories appear _after_ a posts title in the markup, better connecting the categories to where the belong for screen reader users: the title of post of that was just read.
- A more descriptive 'read more' link on the index, archive and search pages to give the user more information as to what they're going to read more of should they follow the link.
- Forced un-hyphenation -- as hyphenation _may_ add difficulty from some users when reading. 
- The 'page title' and 'site description' appear together in the mark-up providing non-visual users a less disjointed experience.
- More semantically structured headings (h1 being the most important heading on a page and h6 being the least, while everything else being graded in between).
- In TwentyFourteen, at narrow viewport width's, once the "mobile menu" shows, the "mobile menu" and "search toggle" switched positions. This behaviour has been corrected, now the "search toggle" appears in the same position at any viewport width. And a user is also given the word "menu" beside the "hamburger icon" of the "mobile menu", thereby providing that much more information to the user, in context, as to what the icon means, and hopefully to better indicate what it does.
- And some other small usability tweaks to better help the user navigate within the theme.