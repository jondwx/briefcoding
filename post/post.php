So You know about HTML, CSS and JavaScript? Want to build something with it?
Those three web technologies can be used to create a web page. Have You done that?
Want something more? How about creating a simple Tic Tac Toe game?
This post explains how I build Tic Tac Toe Game In 3 simple steps<!--more-->

<style>
table.tic-tac-toe-board {
  margin: 0 auto;
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

<div>
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
  <div style="text-align: center;">
    <em>The Board</em>
  </div>
</div>

<p>
Start with creating the board.
In this case the game needs a board that has 3x3 grid,
something like the figure above.
I decided to use HTML element to create base canvas for the game.
But, what element can create something like that?
I think there are several ways to achieve that look, I can use
nested <code>div</code>, but this time I will go with <code>table</code>
element, because I guess that is the easiest.
</p>
