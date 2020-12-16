<a href="{{ route('admin.hamlet.user.edit', $model) }}" class="btn btn-info btn-sm">Edit</a>
<button href="{{ route('admin.hamlet.user.destroy', $model) }}" id="delete" class="btn btn-danger btn-sm">Hapus</button>

{{-- <form action="{{ route('admin.hamlet.user.destroy', $model) }}" method="POST">
    @csrf
    @method("DELETE")
    <button class="btn btn-danger">Hapus</button>
</form> --}}

<script>
    $('button#delete').on('click', function(e) {
        e.preventDefault();

        var href = $(this).attr('href');

        document.getElementById('delete-form').action = href;
        document.getElementById('delete-form').submit();
    })
</script>