<a>Ini contoh rendering data dr db</a>

<table border="10">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>E-mail</th>
        <th>Id Jurusan</th>
        <th>Kelas</th>
        <th>Tgl Lahir</th>
    </tr>
    
    @foreach ($mahasiswas as $mahasiswa)
    <tr>
        <td>{{ $mahasiswa->nim_mahasiswa }}</td>
        <td>{{ $mahasiswa->nama }}</td>
        <td>{{ $mahasiswa->email }}</td>
        <td>{{ $mahasiswa->id_jurusan }}</td>
        <td>{{ $mahasiswa->kelas }}</td>
        <td>{{ $mahasiswa->tgl_lahir }}</td>
    </tr>
    @endforeach
</table>