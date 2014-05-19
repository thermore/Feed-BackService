<script type="text/javascript" src="js/notify.js"></script>
<script type="text/javascript" src="js/notify.min.js"></script>

<script type="text/javascript">
    $(function() {
<?php

if (isset($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo "$.notify('Ha introducido un alias o contraseña incorrecto, por favor, vuelva a intentarlo.',{ position:'top center' });";
    }
    if ($_GET['error'] == 2) {
        echo "$.notify('Ha habido un error, por favor, contacte con el administrador.','error',{ position:'top center' });";
    }
}
?>
    });
</script>