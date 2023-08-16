<?php
if (isset($_GET['error']) == 1) { ?>
    <script type="text/javascript">
        $(document).ready(function() {
            Swal.fire({
                icon: 'question',
                title: 'Enter Username',
                text: 'Empty Login Details',
                position: 'center',
                padding: '30px',
                allowEnterKey: true,
                allowOutsideClick: false,
            })
        });
    </script>
<?php }
?>