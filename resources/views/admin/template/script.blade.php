<!-- Bootstrap core JavaScript-->
<script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>

<script>
    $(document).ready(function() {
        @foreach($users as $user)
        $('#editUserModal{{ $user->id }}').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Tombol yang memicu modal
            // Ekstrak informasi dari atribut data-* pada tombol
            var userId = button.data('user-id');
            var userName = button.data('user-name');
            var userEmail = button.data('user-email');
            var userRoleId = button.data('user-role-id');

            // Mengisi data pengguna ke dalam formulir
            var modal = $(this);
            modal.find('.modal-title').text('Edit User');
            modal.find('#name').val(userName);
            modal.find('#email').val(userEmail);
            modal.find('#role_id').val(userRoleId);

            // Memperbarui URL formulir untuk mengarahkan ke route update yang benar
            modal.find('form').attr('action', "{{ route('user', '') }}/" + userId);
        });
        @endforeach
    });
</script>