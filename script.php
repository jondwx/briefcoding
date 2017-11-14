<script>
  $(function() {
    var text = $("#header-content .d-none").html();
    var texts = text.split(" ~ ");
    $("#header-content .title").text(texts[0]);
    $("#header-content .lead").text(texts[1]);
  });
</script>