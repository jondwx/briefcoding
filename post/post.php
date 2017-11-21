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

<br/>
<br/>
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
see <i>The Board</i> figure.

Now, what can I do in order to get that look?

I guess there are several ways to do that, it can be done using
nested <code>div</code>, css, or javascript.

But this time I will go with native HTML element.

I decide to use HTML element to create base canvas for the game.

The element I use is <code>table</code> along with its components
<code>tr</code>, <code>td</code>.

The reason I use <code>table</code> element is because 
the structure that match for this kind of situation.
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
  After writing that code, I open it in a browser.
  But there is something wrong, I don't see anything in the browser.
  I debug the problem and found some...
</p>

<ol>
  <li>
    <b>No Content</b>
    <p>
      Insert some text inside <code>td</code>
    </p>
  </li>
  <li>
    <b>No Border</b>
    <p>
      Add <code>border</code> attribute with value <code>1</code>
      to the <code>table</code> tag,
      I drop the content from <code>td</code> because I can already see
      something
    </p>
  </li>
</ol>

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
what is that? I zoom in 500%...
</p>

<div style="zoom: 500%;">
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

<br/>
<br/>
<h2>#2 Prettify The Table</h2>


