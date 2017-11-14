<b:section id='content'>
  <b:widget id="Blog0" type="Blog" class="row">

    <b:includable id="main">
      <div class="row">
        <b:include name="post"/>
      </div>
    </b:includable>

    <b:includable id="post">
      <b:loop var='post' values='data:posts'>
        <div class="col-md-4">
          <h2>
            <a expr:href='data:post.url'><data:post.title/></a>
          </h2>
          <div><data:post.body/></div>
          <p>
            <a
              class="btn btn-secondary"
              href="#"
              role="button"
            >View details &#187;</a>
          </p>
        </div>
      </b:loop>
    </b:includable>

  </b:widget>
</b:section>
