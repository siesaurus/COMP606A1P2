<!--
    As per: https://www.w3schools.com/howto/howto_js_todolist.asp
  -->
<?php include("header.php");?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<script src ="script.js"></script>
<div id="myDIV" class="header">
  <h2 style="margin:5px">A JQuery To-Do List</h2>
  <input type="text" id="myInput" placeholder="Add something new to dooo....">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL">

</ul>

<script src ="script.js"></script>

</body>
</html>
