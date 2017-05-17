<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <title>Piano</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<html>
<body>
<div class='piano'>

    <header>
        <audio id='F-2'>
            <source src='http://www.freesound.org/data/previews/117/117691_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
        <audio id='F-sharp-2'>
            <source src='http://www.freesound.org/data/previews/117/117690_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
        <audio id='G-2'>
            <source src='http://www.freesound.org/data/previews/117/117693_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
        <audio id='G-sharp-2'>
            <source src='http://www.freesound.org/data/previews/117/117692_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
        <audio id='A-2'>
            <source src='http://www.freesound.org/data/previews/117/117683_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
        <audio id='A-sharp-2'>
            <source src='http://www.freesound.org/data/previews/117/117682_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
        <audio id='B-2'>
            <source src='http://www.freesound.org/data/previews/117/117684_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
        <audio id='C-2'>
            <source src='http://www.freesound.org/data/previews/117/117686_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
        <audio id='C-sharp-2'>
            <source src='http://www.freesound.org/data/previews/117/117685_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
        <audio id='D-2'>
            <source src='http://www.freesound.org/data/previews/117/117688_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
        <audio id='D-sharp-2'>
            <source src='http://www.freesound.org/data/previews/117/117687_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
        <audio id='E-3'>
            <source src='http://www.freesound.org/data/previews/117/117701_646701-lq.mp3' type='audio/mpeg'>
            Sorry, no support for the <code>audio</code> tag
        </audio>
    </header>

    <div class="piano_container">

    <ul id='note-list'>
        <li class="white" data-keycode= '106' id='F-2-player'>        </li>
        <li class="black" data-keycode= '107' id='F-sharp-2-player'>  </li>
        <li class="white" data-keycode= '108' id='G-2-player'>        </li>
        <li class="black" data-keycode= '59'  id='G-sharp-2-player'>  </li>
        <li class="white" data-keycode= '113' id='A-2-player'>        </li>
        <li class="black" data-keycode= '119' id='A-sharp-2-player'>  </li>
        <li class="white" data-keycode= '101' id='B-2-player'>        </li>
        <li class="black" data-keycode= '114' id='C-2-player'>        </li>
        <li class="white" data-keycode= '116' id='C-sharp-2-player'>  </li>
        <li class="black" data-keycode= '121' id='D-2-player'>        </li>
        <li class="white" data-keycode= '117' id='D-sharp-2-player'>  </li>
        <li class="black" data-keycode= '105' id='E-3-player'>        </li>
    </ul>

    <button class='clear-fix' id='switch-chars'>
        <div class='to-keys'></div>
    </button>
    </div>
</div>
</body>
</html>

<script src="js/piano.js"></script>

</body>
</html>