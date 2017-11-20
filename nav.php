<div class="nav">

  <a class="title" expr:href="data:blog.homepageUrl">
    <data:blog.title/>
  </a>

  <form expr:action="data:blog.searchUrl">
    <input
      name="q"
      type="text"
      expr:value='data:view.isSearch ? data:view.search.query.escaped : &quot;&quot;'
    />
    <button type="submit">Search</button>
  </form>

</div>
