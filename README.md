Pico TweetMeta Plugin
===============

Adds a "TweetMeta" field to the available meta fields

Install
-------

1. Extract the downloaded copy of the "pico_tweetmeta" folder to your Pico install's "plugins" folder
2. Add a line like "TweetMeta: This is the text I want tweeted yada yada" to your pages' meta section.
3. Thats it ;)

__Caveat:__ This does not actually tweet anything, it just allows you to access the contents of the _meta.tweetmeta_ or _page.tweetmeta_ variable for use elsewhere (e.g.: a Twig template).

__Example usage:__ Using Pico-RSS-Plugin, you can replace "_{{ page.content }}_" with "_{{ page.tweetmeta }}_", then use an IFTTT Recipe to push your Pico blog updates to Twitter.