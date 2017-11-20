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
I think there are several ways to achieve that look, it can be done using
nested <code>div</code>, but this time I will go with <code>table</code>
element, because I guess that is the easiest.
</p>

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span></span>&lt;<span style="color: #007700">table</span>&gt;
</pre></div>

3 times this block to create 3 rows

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span></span>&lt;<span style="color: #007700">tr</span>&gt;
    &lt;<span style="color: #007700">td</span>&gt;&lt;/<span style="color: #007700">td</span>&gt;
    &lt;<span style="color: #007700">td</span>&gt;&lt;/<span style="color: #007700">td</span>&gt;
    &lt;<span style="color: #007700">td</span>&gt;&lt;/<span style="color: #007700">td</span>&gt;
&lt;/<span style="color: #007700">tr</span>&gt;
</pre></div>

...

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span></span>&lt;/<span style="color: #007700">table</span>&gt;
</pre></div>

<h3>
I See Nothing
</h3>

<p>
  After writing the html table structure, I don't see anything in the browser,
  something wrong? Hmmmm, oh, I see... I try to add <code>border</code> attribute
  to the <code>table</code> tag
</p>

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span></span>&lt;<span style="color: #007700">table</span> <span style="color: #0000CC">border</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;1&quot;</span>&gt;
</pre></div>

<p>
reload, and...
</p>

<div>
  <table border="1">
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
</div>

<p>
what is that? I zoom in 1000%...
</p>

<div style="zoom: 1000%;">
  <table border="1">
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
</div>
