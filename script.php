<script>
  //<![CDATA[
  $(function() {

    function convertTextToHTML(text) {
      var result = text;
      var matches = text.match(/\*(.*?)\*/g);
      for (var i = 0;matches != null && i < matches.length;i++) {
        var match = matches[i];
        var baseText = match.replace(/\*/g, "");
        var changeTo = {match: match, to: "<b>"+baseText+"</b>"};
        result = result.replace(changeTo.match, changeTo.to);
      }
      return result;
    }

    var theE = $("#header-content .d-none");
    if (theE.length) {
      var text = theE.html();
      var texts = text.split(" ~ ");
      $("#header-content .title").text(texts[0]);
      $("#header-content .lead").html(convertTextToHTML(texts[1]));
    }

  });
  //]]>
</script>
