<div class="mt-4">
    <table id="tbl-menu" class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $p )
            <tr>
                <td>{{ $i = (isset($i) ? ++$i : $i=1) }}</td>
                <td>{{ $p->nama_menu }}</td>
                <td>{{ $p->harga }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>
                    <button class='btn' type="button" style="color:green" title="Edit" data-target="#formEditModal" 
                    data-mode="edit" 
                    data-id="{{ $p->id }}" 
                    data-nama_menu="{{ $p->nama_menu }}" 
                    data-harga="{{ $p->harga }}" 
                    data-deskripsi="{{ $p->deskripsi }}" 
                    data-form-modal="#formEditModal">
                        <i class="fa fa-edit"></i>
                    </button>
                    <form action="paket">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="button" style="color:red" title="Delete">
                            <i class="faS fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>