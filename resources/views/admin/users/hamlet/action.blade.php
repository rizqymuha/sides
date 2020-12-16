<a href="{{ route('admin.hamlet.user.edit', $model) }}" class="btn btn-secondary btn-sm">Edit</a>
<button href="{{ route('admin.hamlet.user.destroy', $model) }}" id="delete" class="btn btn-danger btn-sm">Hapus</button>
<a href="{{ route('admin.hamlet.user.show', $model) }}" class="btn btn-info btn-sm">Detail</a>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $('button#delete').on('click', function(e) {
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah kamu yakin?',
            text: "Data yang telah terhapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oke!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form').action = href;
                document.getElementById('delete-form').submit();
                Swal.fire(
                'Terhapus!',
                'Data berhasil dihapus',
                'success'
                )
            }
        })
    })
</script>