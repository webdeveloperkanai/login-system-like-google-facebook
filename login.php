<?php //if(isset($_COOKIE['uid'])) {
?>

<script>
    window.onunload = refreshParent;

    function refreshParent() {
        window.opener.location.reload();
    }

    setTimeout(function() {
        open(location, '_self').close();
    }, 5000);
</script>
<?php // } 
?>