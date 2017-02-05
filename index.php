<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Forsyth–Edwards Notation Generator</title>
    <link rel="stylesheet" href="css/chessboard.css">
  </head>
  <body>
  <script src="js/json3.min.js"></script>
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/chessboard.js"></script>
 <script src="js/fen.js"></script>
  
  <table style="width: 100%"border="0">
<tbody><tr><td>  <div id="board" style="width: 400px"></div></td><td>
Create a FEN string:<br><br>Forsyth–Edwards Notation (FEN) is a standard notation for describing a particular board position of a chess game. The purpose of FEN is to provide all the necessary information to restart a game from a particular position.<br> <br><br>All figures are free-floating. Each figure position is realizable. At any time you can analyze the game!
<br>

<table></table><br><input size="60" id="myFen" style="color: #de5410;" value="rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR" type="text"> FEN<br>
<br> A FEN "record" defines a particular game position, all in one text line and using only the ASCII character set. A text file with only FEN data records should have the file extension ".fen"
 <br>
 <input type="text" style="color: #de5410;" size="60" id="ausgabe" > Bestmove<br><br>

  <input id="startPositionBtn" value="Initial Board" type="button">   
  <input id="clearBoardBtn" value="Clear Board" type="button">   
     <input type="button" id="flipOrientationBtn" value="Flip Board" /><br /> <br>
      <input type="button" style="height: 40px; width: 200px;  font-size: 20px;"  id="move1Btn" value="Bestmove" /><br><br>
      
       <form action="" method="GET">
 <input type="submit"style="height: 40px; width: 200px;  font-size: 20px;"  value="New analysis">
</form> 
      </td></tr></tbody></table>




   


</body></html>