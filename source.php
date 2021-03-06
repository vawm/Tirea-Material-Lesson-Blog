
<?php
/*----------------------------
This is a new custom home page for Tirea Tean's Lesson Blog.

This is the main source file for the new index.php.
This file contains some important variables as well as the main functions to generated the pages.

Following functions are in use:

html_header()
html_bottom()
home()
abc_sound()
aysaheylu()
navi_download()
navi_lesson()

Author: Tìtstewan
titstewan-learnnavi.org
Co-Author: Tirea Aean
tirea-learnnavi.org
----------------------------*/

// Some php functions for generating the site
if (!defined('TLB')) die('No direct access...');

// ...html header (<html><body>)...
function html_header()
{
	global $weblink;
	echo '<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Tirea Na\'vi</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/material/res/favicon.png">
    <link rel="apple-touch-icon" href="/material/res/favicon.png">
    <link rel="icon" type="image/png" href="/material/res/favicon.png">
    <link rel="alternate" type="application/rss+xml" title="Tirea Na\'vi" href="/feed.xml">
    <link rel="stylesheet" href="/material/res/icons.css">
    <link rel="stylesheet" href="/material/res/materialize.min.css">
    <link rel="stylesheet" href="/material/res/tirea.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#00bcd4">
  </head>
  <header>
    <nav>
      <div class="nav-wrapper">
        <a href="', $weblink, '" class="brand-logo">Tirea Na&apos;vi</a>
        <!-- <a href="#" data-activates="mobilenav" class="button-collapse"><i class="material-icons">menu</i></a> -->
        <a class="button-collapse" href="#" data-activates="mobilenav"><span id="mobile-menu-icon">&#9776;</span></a>
        <ul class="right hide-on-med-and-down" id="regnav">
          <li><a href="', $weblink, '">Home</a></li>
          <li><a href="', $weblink, '?page=sounds">Sounds</a></li>
          <li><a href="', $weblink, '?page=lessons&l">Lessons</a></li>
          <li><a href="', $weblink, '?page=links">Links</a></li>
          <li><a href="', $weblink, '?page=downloads">Downloads</a></li>
          <li id="rss-nav-item"><a id="rss-link" href="feed.xml"><img id="rss-icon" src="res/rss-icon.png"></a></li>
        </ul>
        <ul class="side-nav" id="mobilenav">
          <li><a href="', $weblink, '">Home</a></li>
          <li><a href="', $weblink, '?page=sounds">Sounds</a></li>
          <li><a href="', $weblink, '?page=lessons&l">Lessons</a></li>
          <li><a href="', $weblink, '?page=links">Links</a></li>
          <li><a href="', $weblink, '?page=downloads">Downloads</a></li>
          <li><a href="feed.xml">RSS Feed</a></li>
        </ul>
      </div>
    </nav>
    <div class="amber black-text" id="warning">EXPERIMENTAL SITE UNDER CONSTRUCTION! :D</div>
  </header>
  <main>
  <div class="container">
    <div id="page-content-div">';
}

// ...end of an html page (</body></html>)... AND Disclaimer
function html_bottom()
{
	echo '
    </div> <!-- #page-content-div -->
  </div> <!-- main .container -->

  <!-- FAB -->
  <div id="fab" class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large amber accent-2">
    <i class="large material-icons">search</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>

  <div class="foot">
    Website Admin/Designer: <a href="http://forum.learnnavi.org/profile/?u=1975">Tirea Aean</a>,
	<span title="PHP: Hypertext Preprocessor">Software development</span>:
	<a href="http://forum.learnnavi.org/profile/?u=10322">Tìtstewan</a> and 
	<a href="http://forum.learnnavi.org/profile/?u=1975">Tirea Aean</a>
    | This site was created by members of the <a href="http://learnnavi.org/">LearnNa\'vi.org</a> forum. <br />
    This site is not affiliated with the official Avatar website, James Cameron, Lightstorm Entertainment or the
    Twentieth Century Fox Film Corporation. All Trademarks and Servicemarks are the properties of their
    respective owners.<br />
    <b>\'Ivong Na\'vi!</b>
  </div>
  <script src="res/jquery.min.js"></script>
  <script src="res/materialize.min.js"></script>
  <script src="res/play.js"></script>
  <script>
    $(document).ready(function(){$(\'.button-collapse\').sideNav();})
  </script>
</main>
</html>';
}

// The re-worked material design page!
function home()
{
	global $weblink;
	echo '
      <div class="tooltip" id="index-tt">
        <div class="titlename"><span>Zola&#39;u N&igrave;prrte&#39;</span></div>
        <span class="tooltiptext">Welcome</span>
      </div>
      <!-- CARD -->
      <div id="image" class="section scrollspy">
        <div class="row">
          <div class="col s12 m12 l12">
            <div class="card">
              <div class="card-image">
                <img src="res/school.jpg">
                <span class="card-title">Easy Grammar Lessons</span>
              </div>
              <div class="card-content">
                <p>Welcome to Tirea Na\'vi! This site exists to teach the Na\'vi
                  Language to everyone in an easy to understand way. For all you
                  non-linguist Avatar fans out there, I hope to help you on your
                  way to becoming the next speaker of this amazing language.
                  -- Tirea Aean
                </p>
              </div>
              <div class="card-action">
                <a class="amber-text accent-2" href="', $weblink, '?page=lessons&l">Get started</a>
              </div>
            </div>
          </div>
        </div>
      </div>';
}

// The sound page
function abc_sound()
{
	echo '
  <div class="titlename">
    Na&#39;vi Sounds
  </div>

  <p><span class="navi">Kaltxì</span> ma frapo! This page contains the letters,
    the corresponding International Phonetics Alphabet (IPA) characters and recordings
    of the sounds of the Na&#39;vi language. So to practice your pronunciation,
    click the play button and listen, then try to go along and such.
  </p>

  <ul class="collection with-header">
    <li class="collection-header"><h4>Vowels</h4></li>
    <li class="collection-item">
      <div>a [a]
        <a id="play_a" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>ä [æ]
        <a id="play_ae" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>e [ɛ]
        <a id="play_e" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>i [i]
        <a id="play_i" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>ì [ɪ]
        <a id="play_ih" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>o [o]
        <a id="play_o" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>u [u] / [ʊ]
        <a id="play_u1" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
        <span class="secondary-content black-text">&nbsp; / &nbsp;</span>
        <a id="play_u" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
       </div>
    </li>
  </ul>

  <ul class="collection with-header">
    <li class="collection-header"><h4>Diphthongs</h4></li>
    <li class="collection-item">
      <div>aw [aw]
        <a id="play_aw" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>ay [aj]
        <a id="play_ay" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>ew [ɛw]
        <a id="play_ew" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>ey [ɛj]
        <a id="play_ey" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
  </ul>

  <ul class="collection with-header">
    <li class="collection-header"><h4>Pseudovowels</h4></li>
    <li class="collection-item">
      <div>ll [ḷ]
        <a id="play_ll" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>rr [r]
        <a id="play_rr" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
  </ul>

  <ul class="collection with-header">
    <li class="collection-header"><h4>Consonants</h4></li>
    <li class="collection-item">
      <div>\' [&#660;]
        <a id="play_tihftang" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>f [f]
        <a id="play_f" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>h [h]
        <a id="play_h" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>k [k]
        <a id="play_k" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>kx [&#107;]
        <a id="play_kx" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>l [l]
        <a id="play_l" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>m [m]
        <a id="play_m" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>n [n]
        <a id="play_n" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>ng [&#331;]
        <a id="play_ng" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>p [p]
        <a id="play_p" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>r [&#638;]
        <a id="play_r" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>s [s]
        <a id="play_s" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>t [t]
        <a id="play_t" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>ts [&#678;]
        <a id="play_ts" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>tx [&#116;]
        <a id="play_tx" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>v [v]
        <a id="play_v" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>w [w]
        <a id="play_w" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>y [j]
        <a id="play_y" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
    <li class="collection-item">
      <div>z [z]
        <a id="play_z" class="secondary-content amber-text">
          <i class="material-icons">play_circle_filled</i>
        </a>
      </div>
    </li>
  </ul>
  <audio id="audio_a">
  <source src="audio/a.ogg" type="audio/ogg"/>
  <source src="audio/a.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_ae">
  <source src="audio/ae.ogg" type="audio/ogg"/>
  <source src="audio/ae.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_e">
  <source src="audio/e.ogg" type="audio/ogg"/>
  <source src="audio/e.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_i">
  <source src="audio/i.ogg" type="audio/ogg"/>
  <source src="audio/i.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_ih">
  <source src="audio/ih.ogg" type="audio/ogg"/>
  <source src="audio/ih.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_o">
  <source src="audio/o.ogg" type="audio/ogg"/>
  <source src="audio/o.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_u">
  <source src="audio/u.ogg" type="audio/ogg"/>
  <source src="audio/u.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_u1">
  <source src="audio/u1.ogg" type="audio/ogg"/>
  <source src="audio/u1.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_aw">
  <source src="audio/aw.ogg" type="audio/ogg"/>
  <source src="audio/aw.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_ay">
  <source src="audio/ay.ogg" type="audio/ogg"/>
  <source src="audio/ay.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_ew">
  <source src="audio/ew.ogg" type="audio/ogg"/>
  <source src="audio/ew.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_ey">
  <source src="audio/ey.ogg" type="audio/ogg"/>
  <source src="audio/ey.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_ll">
  <source src="audio/ll.ogg" type="audio/ogg"/>
  <source src="audio/ll.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_rr">
  <source src="audio/rr.ogg" type="audio/ogg"/>
  <source src="audio/rr.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_tihftang">
  <source src="audio/tihftang.ogg" type="audio/ogg"/>
  <source src="audio/tihftang.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_f">
  <source src="audio/f.ogg" type="audio/ogg"/>
  <source src="audio/f.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_h">
  <source src="audio/h.ogg" type="audio/ogg"/>
  <source src="audio/h.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_k">
  <source src="audio/k.ogg" type="audio/ogg"/>
  <source src="audio/k.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_kx">
  <source src="audio/kx.ogg" type="audio/ogg"/>
  <source src="audio/kx.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_l">
  <source src="audio/l.ogg" type="audio/ogg"/>
  <source src="audio/l.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_m">
  <source src="audio/m.ogg" type="audio/ogg"/>
  <source src="audio/m.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_n">
  <source src="audio/n.ogg" type="audio/ogg"/>
  <source src="audio/n.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_ng">
  <source src="audio/ng.ogg" type="audio/ogg"/>
  <source src="audio/ng.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_p">
  <source src="audio/p.ogg" type="audio/ogg"/>
  <source src="audio/p.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_px">
  <source src="audio/px.ogg" type="audio/ogg"/>
  <source src="audio/px.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_r">
  <source src="audio/r.ogg" type="audio/ogg"/>
  <source src="audio/r.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_s">
  <source src="audio/s.ogg" type="audio/ogg"/>
  <source src="audio/s.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_t">
  <source src="audio/t.ogg" type="audio/ogg"/>
  <source src="audio/t.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_ts">
<source src="audio/ts.ogg" type="audio/ogg"/>
<source src="audio/ts.mp3" type="audio/mpeg"/>
Your browser does not support the audio element.
<audio id="audio_tx">
  <source src="audio/tx.ogg" type="audio/ogg"/>
  <source src="audio/tx.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_v">
  <source src="audio/v.ogg" type="audio/ogg"/>
  <source src="audio/v.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_w">
  <source src="audio/w.ogg" type="audio/ogg"/>
  <source src="audio/w.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_y">
  <source src="audio/y.ogg" type="audio/ogg"/>
  <source src="audio/y.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>
<audio id="audio_z">
  <source src="audio/z.ogg" type="audio/ogg"/>
  <source src="audio/z.mp3" type="audio/mpeg"/>
  Your browser does not support the audio element.
</audio>';
}

// The link page
function aysaheylu()
{
	global $weblink;
	echo '
  <div class="titlename">Links</div>

  <ul class="collection with-header">
    <li class="collection-header"><h4>Things I think are cool</h4></li>
    <li class="collection-item"><a class="collection-link" href="https://soundcloud.com/thesoundsofpandora">The Sounds of Pandora</a><br />Official Avatar SoundCloud</li>
    <li class="collection-item"><a class="collection-link" href="http://dict-navi.com">Dict-Na&#39;vi.com</a><br />Online Na&#39;vi Dictionary Search Engine</li>
    <li class="collection-item"><a class="collection-link" href="http://learnnavi.org/navi-numbers">Na&#39;vi Numbers</a><br />Epic Na&#39;vi Number translator thingy</li>
    <li class="collection-item"><a class="collection-link" href="http://www.memrise.com/course/26139/all-navi-vocabulary/">All Na&#39;vi Vocabulary</a><br />Learn Na&#39;vi Memrise Course</li>
    <li class="collection-item"><a class="collection-link" href="http://www.memrise.com/course/51606/navi-useful-phrases/">Na&#39;vi Useful Phrases</a><br />Na&#39;vi Phrases Memrise Course</li>
    <li class="collection-item"><a class="collection-link" href="http://naviteri.org">Na&#39;viteri.org</a><br />Paul Frommer&#39;s Blog</li>
    <li class="collection-item"><a class="collection-link" href="http://layonyayo.com">Layon Yayo</a><br />Na&#39;vi Web Comic by Eana Unil</li>
    <li class="collection-item"><a class="collection-link" href="http://www.avatarnation.net">Avatar Nation</a><br />Avatar Fan Site / Podcast</li>
    <li class="collection-item"><a class="collection-link" href="' . $weblink . '?page=generator">Na&#39;vi Name Generator</a><br />Generates valid names</li>
  </ul>

  <ul class="collection with-header">
    <li class="collection-header"><h4>Na&#39;vi Blogs I read</h4></li>
    <li class="collection-item"><a class="collection-link" href="http://tireaaean.wordpress.com">Pìlok Tireayä Aean</a><br />Tirea Aean</li>
    <li class="collection-item"><a class="collection-link" href="http://masempul.org">Ma Sempul</a><br />Prrton</li>
    <li class="collection-item"><a class="collection-link" href="http://stegemue.blogspot.com">Aylì’uä Ramunong</a><br />Plumps</li>
    <li class="collection-item"><a class="collection-link" href="http://eana-elf.blogspot.com/">Blog of Blue Elf</a><br />Blue Elf</li>
    <li class="collection-item"><a class="collection-link" href="http://leeylan.blogg.se">Le&#39;eylan</a><br />Le&#39;eylan</li>
    <li class="collection-item"><a class="collection-link" href="http://ngawng.blogspot.com">SìLawk LeKye&#39;ung</a><br />Ngawng</li>
    <li class="collection-item"><a class="collection-link" href="http://tsyesika.co.uk">Tsyesìkayä Pìlok</a><br />Tsyesìka</li>
    <li class="collection-item"><a class="collection-link" href="http://eanaunil.blogspot.com/">Tskxekeng ne tìyo&#39;</a><br />Eana Unil</li>
  </ul>';
}

// The download page
function navi_download()
{
	global $weblink;
	echo '
<div class="titlename">Downloads</div>

<ul class="collection with-header">
  <li class="collection-header"><h4>Other Things Hosted On This Site</h4></li>
  <li class="collection-item"><a class="collection-link" href="download/101-Handout-4-WA-2012.pdf">Na\'vi 101 Handout [PDF]</a><br />From AvatarMeet 2012 Seattle, WA</li>
  <li class="collection-item"><a class="collection-link" href="download/102-Handout-4-DC-2013.pdf">Na\'vi 102 Handout [PDF]</a><br />From AvatarMeet 2013 Washington, DC</li>
  <li class="collection-item"><a class="collection-link" href="download/103-Handout-4-LA-2014.pdf">Na\'vi 103 Handout [PDF]</a><br />From AvatarMeet 2014 Los Angeles, CA</li>
  <li class="collection-item"><a class="collection-link" href="download/hkb-kxwerty-mod.apk">Hacker&#39;s Keyboard Mod [APK Android App]</a><br />KXWERTY keyboard layout for Android</li>
  <li class="collection-item"><a class="collection-link" href="download/ts3_Client_LN_Sound_Pack-0.2.zip">TS3 Voice Pack [ZIP]</a><br />Na&#39;vi Language support for TeamSpeak 3</li>
  <li class="collection-item"><a class="collection-link" href="download/navkb6.zip">The KXWERTY Keyboard [ZIP]</a><br />KXWERTY keyboard layout for Windows / Mac</li>
  <!-- <li class="collection-item"><a class="collection-link" href="/material/img">images folder</a><br />Bunch of old memes and comics and whatnot, some Na&#39;vi-related</li> -->
</ul>';
}

// The Na'vi lessons
function navi_lesson($lnum)
{
	global $lessondir;

	// Something (Hopefully lesson) was requested in l= URL var
	if ($lnum != '')
	{
		// Fire up the Markdown Parser
		require_once 'Parsedown.php';
		$Parsedown = new Parsedown();
		// Ready the Markdown Lesson File
		$f = $lessondir . '/' . $lnum . '.md';
		// Parse the file and echo it as HTML, or echo not found.
		echo is_readable($f) ? $Parsedown->text(file_get_contents($f)) : "File Not Found: " . htmlspecialchars($f);
	}
	// No lesson was requested, all we do is show Lesson index.
	else
	{
		echo '
		<div class="titlename">Na\'vi Language Lessons</div>
		<br><br>

		<ul class="collection with-header">
			<li class="collection-header"><h4>Conversational Lessons: Beginners\' Basics</h4></li>
			<li class="collection-item"><a class="collection-link" href="#">Greetings &amp; Introductions</a></li>
		</ul>

		<ul class="collection with-header">
			<li class="collection-header"><h4>Simplified Grammar Lessons: Intro to Na\'vi Grammar</h4></li>
			<li class="collection-item"><a class="collection-link" href="index.php?page=lessons&l=01g">Word Order &amp; Simple Sentences</a></li>
		</ul>
		';
	}
}

?>
