<script>
    @if(Session::has('primary'))
    showNotification("{!! Session::get('primary') !!}", 'primary');
    @endif

    @if(Session::has('info'))
    showNotification("{!! Session::get('info') !!}", 'info');
    @endif

    @if(Session::has('success'))
    showNotification("{!! Session::get('success') !!}", 'success');
    @endif

    @if(Session::has('warning'))
    showNotification("{!! Session::get('warning') !!}", 'warning');
    @endif

    @if(Session::has('danger'))
    showNotification("{!! Session::get('danger') !!}", 'danger');
    @endif

    function showNotification(message, type) {
        Messenger().post({
            message: message,
            type: type,
            showCloseButton: true
        });
    }
</script>