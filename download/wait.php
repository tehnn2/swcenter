<script type="text/javascript">
    function Redirect()
    {
        window.location = '<?= $_GET[f] . ".php" ?>';
    }
    
    document.write(" The file will be downloaded  in 5 seconds.");
    setTimeout('Redirect()', 5000);
</script>
