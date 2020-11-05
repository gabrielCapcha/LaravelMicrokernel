<script src="js/app.js"></script>
<script src="../../../js/app.js"></script>
<script type="text/javascript">
    var module = '';
    
    $(document).ready(function() {
        download = function () {
            productName = document.getElementById('productName').value;
            var data = {
                "name" : productName,
                "price" : productPrice,
                "code" : productCode,
                "register_date" : productDate,
            }
            $.ajax({
                method: "POST",
                url: "/api/product",
                context: document.body,
                data: data,
                statusCode: {
                    400: function() {
                        button.disabled = false;
                        alert("Hubo un error en el registro. Es posible que los datos no sean los correctos.");
                    }
                }
            }).done(function(response) {
                alert("Registro exitoso.");
            });
        }
    });
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>