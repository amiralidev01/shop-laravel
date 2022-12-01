<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/adminpanel/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/adminpanel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="/adminpanel/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/adminpanel/plugins/chart.js/Chart.min.js"></script>
<script src="/adminpanel/dist/js/demo.js"></script>
<script src="/adminpanel/dist/js/pages/dashboard3.js"></script>

<script src="/adminpanel/plugins/ckeditor/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );

</script>


</body>
</html>
