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
<code>tr</code> and <code>td</code>.

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

<div style="height: 110px;">
  <table border="1" style="transform: scale(5);position: relative;transform-origin: 0 0;">
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

<p>
  Now, I'm going to change the table styles, to be exactly like <i>The Board</i>
  figure. first thing to do is make the <i>table data</i> bigger, so I don't
  have to zoom. Let say I give 64px width and height using css and it is
  relative to a class given to the table.
</p>

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span></span>&lt;<span style="color: #007700">style</span>&gt;
<span style="color: #007700">table</span> <span style="color: #007700">td</span> {
    <span style="color: #008800; font-weight: bold">width</span>: <span style="color: #0000DD; font-weight: bold">64</span><span style="color: #333399; font-weight: bold">px</span>;
    <span style="color: #008800; font-weight: bold">height</span>: <span style="color: #0000DD; font-weight: bold">64</span><span style="color: #333399; font-weight: bold">px</span>;
}
&lt;/<span style="color: #007700">style</span>&gt;

&lt;<span style="color: #007700">table</span> <span style="color: #0000CC">border</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;1&quot;</span>&gt;
</pre></div>

<style>
  .the-board1 td{
    width: 64px;
    height: 64px;
  }
</style>

<table class="the-board1" border="1">
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
I notice something that the <code>td</code> element maybe not computed with
width and height of 64px. This may cause issue that the block will not be
square. To make life easier, lets give it CSS3 property <b>box-sizing</b>
with value <b>border-box</b> to make life easier. This gives me easier
calculation, the padding and border will be included in the width and height,
so I will not worry about thinking of how I set width to 64px and get 74px.
</p>

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span></span><span style="color: #333333">*</span> {
    <span style="color: #008800; font-weight: bold">box-sizing</span>: <span style="color: #008800; font-weight: bold">border-box</span>;
}
</pre></div>

<p>
The next thing is <i>border</i>. I need to do some changes to the border because
I don't really understand how the default border table work. So, to change the
border I first add border to the <code>td</code> selector and remove default
table border. I give it some width to get bigger look
~ <code>border: 8px solid black;</code>
</p>

<style>
  .the-board2 td{
    width: 64px;
    height: 64px;
    border: 8px solid black;
  }
</style>

<table class="the-board2">
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
OK. Now, the problem for me is there is gap between blocks. After debug, I find
that there are property called <code>border-spacing</code> in the
<code>table</code> style and it has 2px default value. So, I override the value
with 0.
</p>

<style>
  .the-board3 {
    border-spacing: 0;
  }
  .the-board3 td{
    width: 64px;
    height: 64px;
    border: 8px solid black;
  }
</style>

<table class="the-board3">
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
But now another problem appear, the border between <code>td</code>s not the same.
The logic is because joining border between <code>td</code>s in the middle.
How do I solve this? With another border for the table.
</p>

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span></span><span style="color: #007700">table</span><span style="color: #333333">,</span> <span style="color: #007700">table</span> <span style="color: #007700">td</span> {
  <span style="color: #008800; font-weight: bold">border</span>: <span style="color: #0000DD; font-weight: bold">8</span><span style="color: #333399; font-weight: bold">px</span> <span style="color: #008800; font-weight: bold">solid</span> <span style="color: #008800; font-weight: bold">black</span>;
}
<span style="color: #007700">table</span> {
  <span style="color: #008800; font-weight: bold">border-spacing</span>: <span style="color: #0000DD; font-weight: bold">0</span>;
}
<span style="color: #007700">table</span> <span style="color: #007700">td</span>{
  <span style="color: #008800; font-weight: bold">width</span>: <span style="color: #0000DD; font-weight: bold">64</span><span style="color: #333399; font-weight: bold">px</span>;
  <span style="color: #008800; font-weight: bold">height</span>: <span style="color: #0000DD; font-weight: bold">64</span><span style="color: #333399; font-weight: bold">px</span>;
}
</pre></div>

<style>
  .the-board4, .the-board4 td {
    border: 8px solid black;
  }
  .the-board4 {
    border-spacing: 0;
  }
  .the-board4 td{
    width: 64px;
    height: 64px;
  }
</style>

<table class="the-board4">
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
