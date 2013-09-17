<?php

$shortcodes = array (
array("title"=>"Blip.tv video", "description"=>"embed a Blip.tv video", "code"=>'[blip.tv http://blip.tv/play/goRrgviXRgI?p=1 width="40" height="390"]'),
array("title"=>"CNNMoney video", "description"=>"embed a CNNMoney video", "code"=>'[cnnmoney-video url=http://money.cnn.com/video/news/2012/10/23/n-presidential-debate-foreign-policy.cnnmoney/index.html]'),
array("title"=>"Dailymotion", "description"=>"embed a DailyMotion video", "code"=>'[dailymotion id=x8oma9]'),
array("title"=>"Flickr video", "description"=>"embed a Flickr video", "code"=>'[flickr video=2402990826]'),
array("title"=>"Ted video", "description"=>"embed a TED Talks video", "code"=>'[ted id=981]'),
array("title"=>"Vimeo video", "description"=>"embed a Vimeo video", "code"=>'[vimeo 44633289]'),
array("title"=>"VideoPress video", "description"=>"embed a VideoPress video", "code"=>'[wpvideo 9LzAOwT5]'),
array("title"=>"YouTube video", "description"=>"embed a YouTube video", "code"=>'[youtube=http://www.youtube.com/watch?v=JaNH56Vpg-A&w=320&h=240]'),
array("title"=>"Hulu video", "description"=>"embed a Hulu video", "code"=>'[hulu http://www.hulu.com/watch/369061 width=300 start_time=50 end_time=65 thumbnail_frame=48]'),
array("title"=>"Audio", "description"=>"display uploaded audio file as an audio player", "code"=>'[audio http://en.support.files.wordpress.com/2012/05/mattmullenweg-interview.m4a ]'),
array("title"=>"Playlist", "description"=>"display a playlist for uploaded audio files", "code"=>'[playlist tracks="32,10"]'),
array("title"=>"Rdio", "description"=>"embed music from Rdio", "code"=>'[rdio http://rd.io/x/QGCUPkaBvA%5D]'),
array("title"=>"Spotify", "description"=>"embed music from Spotify", "code"=>'[spotify http://open.spotify.com/track/4bz7uB4edifWKJXSDxwHcs%5D]'),
array("title"=>"Bandcamp", "description"=>"embed music from Bandcamp", "code"=>'[bandcamp album=572286610 bgcol=FFFFFF linkcol=4285BB size=venti]'),
array("title"=>"8tracks", "description"=>"embed music from 8tracks", "code"=>'[8tracks url="http://8tracks.com/smurph/hipster-swag" height="500" width="600" playops="shuffle"]'),
array("title"=>"Gallery", "description"=>"insert an image gallery into a post or page", "code"=>'[gallery type="square" columns=3 link="file" orderby="menu_order ASC" size="thumbnail"]'),
array("title"=>"Instagram image", "description"=>"embed an image from Instagram", "code"=>'[instagram url=http://instagram.com/p/NHb_XFAdot/ width=300]'),
array("title"=>"Scribd document", "description"=>"embed a document/file from Scribd", "code"=>'[scribd id=88992635 key=key-1apu959lbbum5ptdz4yz mode=list]'),
array("title"=>"SlideShare slideshow", "description"=>"embed a slideshow from Slideshare.net", "code"=>'[slideshare id=8874930&doc=sotw2011-as-delivered-110816213106-phpapp01&w=650&h=500]'),
array("title"=>"Archives", "description"=>"display an archive index of your blog posts", "code"=>'[archives type="postbypost" format="html" limit=0 showcount="false" before="" after="" order="desc"]'),
array("title"=>"Display posts", "description"=>"list posts of a specific category, author, or tag", "code"=>'[display-posts taxonomy="category" tax_term="featured" taxonomy_2="post_tag" tax_2_term="homepage"]'),
array("title"=>"Contact form", "description"=>"add a contact form to your page", "code"=>'[contact-form]
[contact-field label="Name" type="name" required="true" /]
[contact-field label="Email" type="email" required="true" /]
[contact-field label="Website" type="url" /]
[contact-field label="Comment" type="textarea" required="true" /]
[/contact-form]'),
array("title"=>"Gist code snippet", "description"=>"embed a gist code snippet", "code"=>'[gist]2314628[/gist]'),
array("title"=>"Locu menu", "description"=>"add a restaurant menu provided by Locu", "code"=>'[locu id="9d8cc2012cef02e90493" medium="web"]'),
array("title"=>"PollDaddy poll", "description"=>"embed a PollDaddy poll", "code"=>'[polldaddy poll=3796094]'),
array("title"=>"Source code", "description"=>"preserve the formatting of source code", "code"=>'[code language="php"]
your code here
[/code]'),
array("title"=>"Twitter timeline", "description"=>"embed a Twitter timeline", "code"=>'[twitter-timeline id=1234 username=yourhandle]'),
array("title"=>"iCalendar events feed", "description"=>"displays an iCalendar Feed URL in a list", "code"=>'[upcomingevents url="ICALENDARFEEDURL"]'),
array("title"=>"Wufoo form", "description"=>"embed a Wufoo form", "code"=>'[wufoo username="exampleuser" formhash="x7w3w3" autoresize="true" height="458" header="show"]'),
array("title"=>"SoundCloud Audio Player", "description"=>"embed audio from SoundCloud", "code"=>'[soundcloud params="auto_play=true&show_comments=false" url="http://api.soundcloud.com/tracks/207988" iframe="true"]')
);

?>