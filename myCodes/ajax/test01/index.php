<script type="text/javascript">
    function getContent() {
        // creating an instance of the HTTTP request object
        var xmlHttp = new XMLHttpRequest();

        xmlHttp.open("GET", "movie-list.php", false);

        xmlHttp.send(null);

        var element = document.getElementById("content");
        element.innerHTML = xmlHttp.responseTEXT;
    }
</script>

<form>
    <input onclick="getContent();" type="button" value="get content" />
</form>

<div id="content"></div>