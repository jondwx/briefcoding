<div role="main">

  <b:if cond='data:blog.pageType == &quot;index&quot;'>
    <div class="jumbotron d-none d-md-block text-light bg-dark">
      <div class="container">
        <?php include('header.php') ?>
      </div>
    </div>
  </b:if>

  <div class="container" style="padding-top: 32px;">
    <?php include('blog.php') ?>
    <hr/>
  </div>

</div>

<div class="container">
  <p>&#169; DragonGlass 2017</p>
</div>
