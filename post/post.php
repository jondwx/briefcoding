Using blogger as a platform of blogging is still my preference because 
I can do whatever I want to change the <i>frontend</i> to be exactly like
what I want. Here is the first step of how I changed my blogger looks<!--more-->

<p>
  I don't like something that I don't understand. So, starting with the output
  of my page on blogger, I go to <b>Theme</b> &gt; <b>Edit HTML</b> and delete
  all of the code in the editor. But it can't be saved.
  <span style="color: DarkRed;">
    Error parsing XML, line 1, column 1: Premature end of file.
  </span>
  I solved it by writing some code in the editor
</p>

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span></span>&lt;<span style="color: #007700">html</span>&gt;&lt;/<span style="color: #007700">html</span>&gt;
</pre></div>

<p>
  The previous error is no longer appear but I got new error.
  <span style="color: DarkRed">
    There should be one and only one skin in the theme, and we found: 0.
  </span>
  After some time of searching, I found out about <b>blogger tags</b>.
  It is the rule from blogger to add some kind of custom tag in order
  to parse the code.
  Then, I add the skin tag
  <code>b:skin</code> inside the <code>html</code> tag because it will cause
  another error if it is outside. The next thing is usual <code>HTML</code>
  code, I need to add <code>head</code> and <code>body</code> tags, because the
  theme must include them.
</p>

<p>
  Still, I can't save my work.
  <span style="color: DarkRed;">
    We did not find any section in your theme.
    A theme must have at least one b:section tag.
  </span>
  I need another blogger tag, <code>b:section</code> to be added to the editor.
  I place it inside the body tag because later it will become the content of
  the page. I also need to add an attribute to the <code>b:section</code> tag
  called <code>id</code> and I give it value <code>main</code> to get rid
  of error
  <span style="color: DarkRed;">
    One of the sections is missing the required id attribute.
    Every section should have a unique id.
  </span>
  After that, I can save the code, finally!
</p>

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span></span>&lt;<span style="color: #007700">html</span>&gt;
  &lt;<span style="color: #007700">b:skin</span>&gt;&lt;/<span style="color: #007700">b:skin</span>&gt;
  &lt;<span style="color: #007700">head</span>&gt;&lt;/<span style="color: #007700">head</span>&gt;
  &lt;<span style="color: #007700">body</span>&gt;
    &lt;<span style="color: #007700">b:section</span> <span style="color: #0000CC">id</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&quot;main&quot;</span>&gt;&lt;/<span style="color: #007700">b:section</span>&gt;
  &lt;/<span style="color: #007700">body</span>&gt;
&lt;/<span style="color: #007700">html</span>&gt;
</pre></div>

<p>
  Just out of curiosity, I go to my page and see something changing.
  The <code>b:skin</code> become <code>style</code> tag, <code>b:section</code>
  become <code>div</code> tag and also I another tag for style, and script
  which I believe that is generated from blogger. I don't understand what the
  code for, so I want to remove them, and I can. I simply add some attribute,
  <code>b:css</code> value <code>false</code> to remove the generated
  CSS and <code>b:js</code> value <code>false</code> for the JavaScript code.
  I check again the output of the page. I make a slight change to the
  <code>b:skin</code> because it become <code>style</code> tag and the
  best practice is to put the <code>style</code> tag inside <code>head</code>.
</p>

<div class="highlight" style="background: #ffffff"><pre style="line-height: 125%"><span></span>&lt;<span style="color: #007700">html</span>&gt;
  &lt;<span style="color: #007700">head</span>&gt;
    &lt;<span style="color: #007700">style</span> <span style="color: #0000CC">id</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&#39;page-skin-1&#39;</span> <span style="color: #0000CC">type</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&#39;text/css&#39;</span>&gt;
      <span style="color: #333333">&lt;!</span><span style="color: #007700">--</span> <span style="color: #007700">--</span><span style="color: #333333">&gt;</span>
    &lt;/<span style="color: #007700">style</span>&gt;
  &lt;/<span style="color: #007700">head</span>&gt;
  &lt;<span style="color: #007700">body</span>&gt;
    &lt;<span style="color: #007700">div</span> <span style="color: #0000CC">class</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&#39;no-items section&#39;</span> <span style="color: #0000CC">id</span><span style="color: #333333">=</span><span style="background-color: #fff0f0">&#39;main&#39;</span>&gt;&lt;/<span style="color: #007700">div</span>&gt;
  &lt;/<span style="color: #007700">body</span>&gt;
&lt;/<span style="color: #007700">html</span>&gt;
</pre></div>
