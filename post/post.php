So You know about HTML, CSS and JavaScript? Want to build something with it?
Those three web technologies can be used to create a web page. Have You done that?
Want something more? How about creating a simple Tic Tac Toe game?
This post explains how I build Tic Tac Toe Game In 3 simple steps<!--more-->

<style>
table.tic-tac-toe-board {
  border: 4px solid black;
  border-spacing: 0;
}
table.tic-tac-toe-board td {
  border: 4px solid black;
  width: 64px;
  height: 64px;
}
</style>

<h2>#1 The Board</h2>

<table class="tic-tac-toe-board">
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

<p>
Start with creating the board.
In this case the game needs a board that has 3x3 grid,
something like the figure above.
I decided to use HTML element to create the base of the game.
But, what element can create something like that?
</p>
