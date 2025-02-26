<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table class="table align-items-center justify-content-center mb-0 table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Link</th>
                <th>Nomer Surat</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Tanggal Masuk</th>
                <th>Batas Akhir</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($recipient as $item)
                <tr>
                    <td>
                        <div>
                            <div>
                                <h6>{{ $loop->iteration }}</h6>
                            </div>
                        </div>
                    </td>
                    @if ($item->link == null)
                        <td>
                            <span>Tidak ada link</span>
                        </td>
                    @else
                        <td>
                            <span>
                                <a href="{{ $item->link }}">__Link >></a>
                            </span>
                        </td>
                    @endif
                    <td>
                        <p>{{ $item->no_surat }}</p>
                    </td>
                    <td>
                        <p>{{ $item->pengirim }}</p>
                    </td>
                    <td>
                        <p>
                            <a href="{{ asset('assets/file_surat/' . $item->file_surat) }}" target="_blank">
                                <i class="fas fa-eye"></i>__{{ $item->perihal }}
                            </a>
                        </p>
                    </td>
                    <td>
                        <span>{{ $item->tgl_masuk }}</span>
                    </td>
                    <td>
                        <span>{{ $item->tgl_keluar }}</span>
                    </td>
                    <td>
                        <span
                            class="@if ($item->status == 'verifikasi') bg-warning @elseif ($item->status == 'setuju') bg-success @elseif ($item->status == 'ditolak') bg-danger @else bg-secondary @endif">
                            {{ $item->status }}
                        </span>
                    </td>

                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
        document.getElementById('exportExcel').addEventListener('click', function() {
            let filterValue = document.getElementById('filterSelect').value;
            let table = document.querySelector('.table-data'); // Ambil tabel
            let rows = table.querySelectorAll('tbody tr');
            let filteredData = [];

            let today = new Date();
            let startDate, endDate;

            // Tentukan rentang tanggal berdasarkan filter
            if (filterValue === 'week') {
                startDate = new Date(today.setDate(today.getDate() - today.getDay())); // Minggu pertama
                endDate = new Date(); // Hari ini
            } else if (filterValue === 'month') {
                startDate = new Date(today.getFullYear(), today.getMonth(), 1); // Awal bulan ini
                endDate = new Date(today.getFullYear(), today.getMonth() + 1, 0); // Akhir bulan ini
            } else if (filterValue === 'year') {
                startDate = new Date(today.getFullYear(), 0, 1); // Awal tahun ini
                endDate = new Date(today.getFullYear(), 11, 31); // Akhir tahun ini
            }

            // Loop melalui baris tabel untuk filter
            rows.forEach(row => {
                let tglMasuk = row.cells[5].innerText.trim(); // Ambil tanggal masuk dari kolom 6 (index 5)
                let dateParts = tglMasuk.split('-'); // Format: YYYY-MM-DD
                let rowDate = new Date(dateParts[0], dateParts[1] - 1, dateParts[2]);

                // Jika tanggal sesuai filter, masukkan ke data yang diekspor
                if (!filterValue || (rowDate >= startDate && rowDate <= endDate)) {
                    let rowData = [];
                    row.querySelectorAll('td').forEach(cell => {
                        rowData.push(cell.innerText.trim());
                    });
                    filteredData.push(rowData);
                }
            });

            // Buat WorkSheet & WorkBook Excel
            let wb = XLSX.utils.book_new();
            let ws = XLSX.utils.aoa_to_sheet([
                ['No', 'Link', 'Nomer Surat', 'Pengirim', 'Perihal', 'Tanggal Masuk', 'Batas Akhir',
                    'Status'
                ],
                ...filteredData
            ]);

            XLSX.utils.book_append_sheet(wb, ws, "Data Filtered");

            // Simpan File Excel
            XLSX.writeFile(wb, `Export_${filterValue || 'Semua'}.xlsx`);
        });
    </script>


</body>

</html>
