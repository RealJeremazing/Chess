<!DOCTYPE html>
<html>
  <head>
    <style>
      #chess-board {
        display: flex;
        flex-wrap: wrap;
        width: 400px;
        height: 400px;
      }
      .row {
        display: flex;
      }
      .square {
        width: 50px;
        height: 50px;
      }
      .black {
        background-color: black;
      }
      .white {
        background-color: white;
      }
    </style>
  </head>
  <body>
    <div id="chess-board">
      <div class="row">
        <div class="square black"></div>
        <div class="square white"></div>
        <!-- repeat this pattern 8 times -->
      </div>
      <!-- repeat this pattern 8 times -->
    </div>
  </body>
</html>
