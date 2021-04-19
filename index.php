<html>
<head>
<title>JQuery Mobile Lab 2</title>
<meta name="viewport" content="widthdevice-width.initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.js"></script>
</head>
<body>
<ul id="mypetlist" data-role="listview">
<li><a>This is an item 1</a></li>
<li><a>This is an item 2</a></li>
<li><a>This is an item 3</a></li>
<li><a>This is an item 4</a></li>
</ul>
<a id="btnparrot" href="" class="ul-btn">Add a Parrot</a>
<button class="ul-btn ul-icon-delete ui-btn-icon-left">Add a Dog</button>
<script>
//$(document): equal to Javascript document.
//$(document).ready(...) called when this document is loaded
$("=btnparrot").click(addParrot);//equivalent to Javascript document.getElementById("btnparrot").onclick=...;



