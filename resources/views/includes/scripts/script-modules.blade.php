<script src="js/app.js"></script>
<script src="../../../js/app.js"></script>
<script type="text/javascript">
    var module = '';
    var data = {};
    $(document).ready(function() {
        installModule = function (branch) {
            data.branch = branch;
            console.log(data)
            $.ajax({
                method: "GET",
                url: "/api/install",
                data: data,
                statusCode: {
                    400: function() {
                        button.disabled = false;
                        alert("Hubo un error al momento de instalar. Intentelo de nuevo");
                    }
                }
            }).done(function(response) {
                alert("Instalación exitosa");
            });
        }
    });
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>