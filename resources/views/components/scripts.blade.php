<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
      @if ($message = Session::get('success'))
                   Swal.fire(
                        'Created!',
                        'Your file has been created',
                        'success'
                    )    
        @endif

        $('.btndelete').click(function (e) {  
          let userId = $(this).attr('data-id')
          Swal.fire({
          icon: 'success',
          title: 'Yappy! ',
          showConfirmButton: false,
          text: 'Do you want to save the changes?' + userId,
        })
        });
    });

</script>