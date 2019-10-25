    <script>
        $('.select2').select2()

        $('#deleteCModal').on('show.bs.modal', function(e) {
            $(this).find('#conf_delete').attr('action', $(e.relatedTarget).data('uri'));
        });
        function loggedIn(){
            $.ajax({
                url: "function/loggedIn",
                method: "GET",
                success:function(data){
                    $('#loggedInTime').html(data)
                }
            })
        }
        loggedIn()
        setInterval(function(){
            loggedIn()
        }, 1000)
    </script>