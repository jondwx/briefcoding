<b:section id='content'>
  <b:widget id="Blog0" type="Blog" class="row">

    <b:includable id="main">
      <b:if cond='data:blog.pageType == &quot;index&quot;'>
        <b:include name="post-index"/>
      <b:else/>
        <b:include name="post-item"/>
      </b:if>
    </b:includable>

    <b:includable id="post-item">
      <b:loop var='post' values='data:posts'>
        <div>
          <h1><data:post.title/></h1>
          <div>
            <data:post.body/>
          </div>
        </div>
      </b:loop>
    </b:includable>

    <b:includable id="post-index">
      <b:loop var='post' values='data:posts'>
        <div>
          <h4>
            <a expr:href='data:post.url'><data:post.title/></a>
          </h4>
          <div>
            <data:post.body
              /><b:if cond='data:post.hasJumpLink'
              ><a
                expr:href='data:post.url + &quot;#more&quot;'
                expr:title='data:post.title'
              ><data:post.jumpText/></a>
            </b:if>
          </div>
        </div>
      </b:loop>
    </b:includable>

  </b:widget>
</b:section>
