<div class="mt-4">
    <table id="tbl-pemesanan" class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal Pemesanan</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Nama Pemesanan</th>
                <th>Jumlah Pelanggan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemesanan as $p)
                <tr>
                    <td>{{ $i = isset($i) ? ++$i : ($i = 1) }}</td>
                    <td>{{ $p->tanggal_pemesanan }}</td>
                    <td>{{ $p->jam_mulai }}</td>
                    <td>{{ $p->jam_selesai }}</td>
                    <td>{{ $p->nama_pemesanan }}</td>
                    <td>{{ $p->jumlah_pelanggan }}</td>
                    <td>
                        <button class='btn' type="button" style="color:green" data-toggle="modal"
                            data-target="#formModal" data-mode="edit" data-id="{{ $p->id }}"
                            data-tanggal_pemesanan="{{ $p->tanggal_pemesanan }}" data-jam_mulai="{{ $p->jam_mulai }}"
                            data-jam_selesai="{{ $p->jam_selesai }}" data-nama_pemesanan="{{ $p->nama_pemesanan }}"
                            data-tanggal_pemesanan="{{ $p->jam_mulai }}">
                            <i class="fa fa-edit"></i>
                        </button>
                        <form action="{{ url('pemesanan/' . $p->id) }}" style="display:inline" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn delete-data" type="submit" style="color:red" title="Delete">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
