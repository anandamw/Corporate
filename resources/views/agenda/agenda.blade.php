@extends('layouts.template')



@section('content')
    <style>
        .badge.bg-warning {
            background-color: #d4a20a !important;
            color: #fff !important;
        }

        .badge.bg-success {
            background-color: #28a745 !important;
            color: #fff !important;
        }

        .badge.bg-danger {
            background-color: #dc3545 !important;
            color: #fff !important;
        }

        .badge.bg-secondary {
            background-color: #6c757d !important;
            color: #fff !important;
        }
    </style>
    <div class="container-fluid py-4 px-5">


        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center mb-3">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Tabel {{ $title }}</h6>
                                {{-- <p class="text-sm mb-sm-0">These are details about the last transactions</p> --}}
                            </div>
                            <div class="ms-auto d-flex">
                                <div class="input-group input-group-sm ms-auto me-2">
                                    <span class="input-group-text text-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="text" id="searchInput" class="form-control form-control-sm"
                                        placeholder="Search">
                                </div>

                                <!-- Select Filter -->
                                <select id="filterSelect" class="form-select form-select-sm me-2">
                                    <option value="">Pilih Waktu</option>
                                    <option value="week">Minggu Ini</option>
                                    <option value="month">Bulan Ini</option>
                                    <option value="year">Tahun Ini</option>
                                </select>

                                <!-- Export Excel Button -->
                                <button type="button" id="exportExcel"
                                    class="btn btn-sm btn-success btn-icon d-flex align-items-center mb-0 me-2">
                                    <span class="btn-inner--icon">
                                        <i class="fas fa-file-excel me-2"></i>
                                    </span>
                                    <span class="btn-inner--text">Export Excel</span>
                                </button>

                                <button type="button" id="printPDF"
                                    class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2">
                                    <span class="btn-inner--icon">
                                        <i class="fas fa-print me-2"></i>
                                    </span>
                                    <span class="btn-inner--text">Print PDF</span>
                                </button>



                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 py-0">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7">No</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Link</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7">Nomer Surat</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Pengirim</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Perihal</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Tanggal Masuk
                                        </th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Batas Akhir
                                        </th>

                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Status</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2 ">
                                            ------------------------
                                        </th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($recipient as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $loop->iteration }}</h6>

                                                    </div>
                                                </div>
                                            </td>
                                            @if ($item->link == null)
                                                <td>
                                                    <span class="text-sm font-weight-normal ">Tidak ada link
                                                    </span>
                                                </td>
                                            @else
                                                <td>
                                                    <span class="text-sm font-weight-normal">
                                                        <a href="{{ $item->link }}" style="color: rgb(24, 24, 255)">__Link
                                                            >></a>
                                                    </span>
                                                </td>
                                            @endif
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">{{ $item->no_surat }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">{{ $item->pengirim }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-normal mb-0">
                                                    <a href="{{ asset('assets/file_surat/' . $item->file_surat) }}"
                                                        style="color: rgb(24, 24, 255)" target="_blank">
                                                        <i class="fas fa-eye"></i>__{{ $item->perihal }}
                                                    </a>
                                                </p>
                                            </td>

                                            <td>
                                                <span class="text-sm font-weight-normal">{{ $item->tgl_masuk }}</span>
                                            </td>
                                            <td>
                                                <span class="text-sm font-weight-normal">{{ $item->tgl_keluar }}</span>
                                            </td>

                                            <td>
                                                <span
                                                    class="badge text-white 
                                                    @if ($item->status == 'verifikasi') bg-warning 
                                                    @elseif ($item->status == 'setuju') bg-success 
                                                    @elseif ($item->status == 'ditolak') bg-danger 
                                                    @else bg-secondary @endif">
                                                    {{ $item->status }}
                                                </span>
                                            </td>


                                            <td>
                                                <div class="">
                                                    <form action="{{ route('surat-masuk.updateStatus', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <select class="form-select" id="status" name="status">
                                                            <option value="verifikasi"
                                                                {{ $item->status == 'verifikasi' ? 'selected' : '' }}>
                                                                Verifikasi</option>
                                                            <option value="setuju"
                                                                {{ $item->status == 'setuju' ? 'selected' : '' }}>Setuju
                                                            </option>
                                                            <option value="ditolak"
                                                                {{ $item->status == 'ditolak' ? 'selected' : '' }}>Ditolak
                                                            </option>
                                                        </select>
                                                        @error('status')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <button type="submit" class="btn btn-success btn-sm">
                                                    <i class="fas fa-check-circle"></i> Save
                                                </button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.6.0/jspdf.plugin.autotable.min.js"></script>


                        <script>
                            document.getElementById('printPDF').addEventListener('click', function() {
                                const {
                                    jsPDF
                                } = window.jspdf;
                                let doc = new jsPDF();

                                let filterValue = document.getElementById('filterSelect').value;
                                let table = document.querySelector('.table'); // Pastikan ini tabel yang benar
                                let rows = table.querySelectorAll('tbody tr');
                                let filteredData = [];

                                let today = new Date();
                                let startDate, endDate;

                                // Tentukan rentang tanggal berdasarkan filter
                                if (filterValue === 'week') {
                                    startDate = new Date(today.setDate(today.getDate() - today.getDay()));
                                    endDate = new Date();
                                } else if (filterValue === 'month') {
                                    startDate = new Date(today.getFullYear(), today.getMonth(), 1);
                                    endDate = new Date(today.getFullYear(), today.getMonth() + 1, 0);
                                } else if (filterValue === 'year') {
                                    startDate = new Date(today.getFullYear(), 0, 1);
                                    endDate = new Date(today.getFullYear(), 11, 31);
                                }

                                // Loop melalui baris tabel untuk filter
                                rows.forEach(row => {
                                    let tglMasuk = row.cells[5].innerText.trim(); // Ambil tanggal masuk dari kolom 6 (index 5)
                                    let dateParts = tglMasuk.split('-'); // Format: YYYY-MM-DD
                                    let rowDate = new Date(dateParts[0], dateParts[1] - 1, dateParts[2]);

                                    // Jika tanggal sesuai filter, masukkan ke data yang diekspor
                                    if (!filterValue || (rowDate >= startDate && rowDate <= endDate)) {
                                        let rowData = [];
                                        let cells = row.querySelectorAll('td');

                                        for (let i = 0; i < cells.length - 2; i++) { // Eksklusif dua kolom terakhir
                                            let cell = cells[i];

                                            // Cek jika ini adalah kolom "Link"
                                            if (i === 1) { // Kolom Link ada di index 1
                                                let linkElement = cell.querySelector('a');
                                                rowData.push(linkElement ? linkElement.href :
                                                    'Tidak ada link'); // Ambil href atau teks
                                            } else {
                                                rowData.push(cell.innerText.trim());
                                            }
                                        }

                                        filteredData.push(rowData);
                                    }
                                });

                                // Header tabel PDF
                                let headers = [
                                    ['No', 'Link', 'Nomer Surat', 'Pengirim', 'Perihal', 'Tanggal Masuk', 'Batas Akhir', 'Status']
                                ];

                                // Tambahkan judul di PDF
                                doc.setFontSize(16);
                                doc.text('Laporan Surat Masuk', 14, 15);
                                doc.setFontSize(12);
                                doc.text(`Filter: ${filterValue || 'Semua'}`, 14, 22);

                                // Tambahkan tabel ke PDF
                                doc.autoTable({
                                    head: headers,
                                    body: filteredData,
                                    startY: 30,
                                    theme: 'striped',
                                    styles: {
                                        fontSize: 10
                                    },
                                    headStyles: {
                                        fillColor: [0, 0, 0]
                                    }, // Warna hitam untuk header
                                });

                                // Simpan sebagai file PDF
                                doc.save(`Laporan_${filterValue || 'Semua'}.pdf`);
                            });
                        </script>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

                        <script>
                            document.getElementById('exportExcel').addEventListener('click', function() {
                                let filterValue = document.getElementById('filterSelect').value;
                                let table = document.querySelector('.table'); // Pastikan ini adalah tabel yang benar
                                let rows = table.querySelectorAll('tbody tr');
                                let filteredData = [];

                                let today = new Date();
                                let startDate, endDate;

                                // Tentukan rentang tanggal berdasarkan filter
                                if (filterValue === 'week') {
                                    startDate = new Date(today.setDate(today.getDate() - today.getDay()));
                                    endDate = new Date();
                                } else if (filterValue === 'month') {
                                    startDate = new Date(today.getFullYear(), today.getMonth(), 1);
                                    endDate = new Date(today.getFullYear(), today.getMonth() + 1, 0);
                                } else if (filterValue === 'year') {
                                    startDate = new Date(today.getFullYear(), 0, 1);
                                    endDate = new Date(today.getFullYear(), 11, 31);
                                }

                                // Loop melalui baris tabel untuk filter
                                rows.forEach(row => {
                                    let tglMasuk = row.cells[5].innerText.trim(); // Ambil tanggal masuk dari kolom 6 (index 5)
                                    let dateParts = tglMasuk.split('-'); // Format: YYYY-MM-DD
                                    let rowDate = new Date(dateParts[0], dateParts[1] - 1, dateParts[2]);

                                    // Jika tanggal sesuai filter, masukkan ke data yang diekspor
                                    if (!filterValue || (rowDate >= startDate && rowDate <= endDate)) {
                                        let rowData = [];
                                        let cells = row.querySelectorAll('td');

                                        for (let i = 0; i < cells.length - 2; i++) { // Eksklusif dua kolom terakhir
                                            let cell = cells[i];

                                            // Cek jika ini adalah kolom "Link"
                                            if (i === 1) { // Kolom Link ada di index 1 (sesuai struktur tabel)
                                                let linkElement = cell.querySelector('a');
                                                rowData.push(linkElement ? linkElement.href :
                                                    'Tidak ada link'); // Ambil href atau teks
                                            } else {
                                                rowData.push(cell.innerText.trim());
                                            }
                                        }

                                        filteredData.push(rowData);
                                    }
                                });

                                // Buat WorkSheet & WorkBook Excel
                                let wb = XLSX.utils.book_new();
                                let ws = XLSX.utils.aoa_to_sheet([
                                    ['No', 'Link', 'Nomer Surat', 'Pengirim', 'Perihal', 'Tanggal Masuk', 'Batas Akhir',
                                        'Status'
                                    ], // Header tanpa 2 kolom terakhir
                                    ...filteredData
                                ]);

                                XLSX.utils.book_append_sheet(wb, ws, "Data Filtered");

                                // Simpan File Excel
                                XLSX.writeFile(wb, `Export_${filterValue || 'Semua'}.xlsx`);
                            });
                        </script>

                        <div class="border-top py-3 px-3 d-flex align-items-center justify-content-between">
                            <!-- Previous Button -->
                            <button class="btn btn-sm btn-white @if ($recipient->onFirstPage()) disabled @endif"
                                onclick="goToPage({{ $recipient->currentPage() - 1 }})" style="font-size: 14px;">
                                <i class="fas fa-arrow-left me-2"></i> Previous
                            </button>

                            <!-- Pagination Links -->
                            <nav aria-label="Page navigation" class="ms-auto">
                                <ul class="pagination pagination-light mb-0">
                                    <!-- Previous Page -->
                                    <li class="page-item @if ($recipient->onFirstPage()) disabled @endif">
                                        <a class="page-link" href="javascript:;"
                                            onclick="goToPage({{ $recipient->currentPage() - 1 }})">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>

                                    <!-- Dynamic Page Numbers -->
                                    @for ($i = 1; $i <= $recipient->lastPage(); $i++)
                                        <li class="page-item @if ($i == $recipient->currentPage()) active @endif">
                                            <a class="page-link border-0 font-weight-bold" href="javascript:;"
                                                onclick="goToPage({{ $i }})">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    <!-- Next Page -->
                                    <li class="page-item @if ($recipient->onLastPage()) disabled @endif">
                                        <a class="page-link" href="javascript:;"
                                            onclick="goToPage({{ $recipient->currentPage() + 1 }})">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                            <!-- Next Button -->
                            <button class="btn btn-sm btn-white @if ($recipient->onLastPage()) disabled @endif ms-auto"
                                onclick="goToPage({{ $recipient->currentPage() + 1 }})" style="font-size: 14px;">
                                Next <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>



                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        function goToPage(page) {
            if (page < 1 || page > {{ $recipient->lastPage() }}) return; // Prevent navigating to invalid pages
            window.location.href = '/recipient?page=' + page; // Update the page URL with the selected page number
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            const tableRows = document.querySelectorAll(".table-data tbody tr");

            searchInput.addEventListener("keyup", function() {
                const searchText = searchInput.value.toLowerCase();

                tableRows.forEach(row => {
                    const rowText = row.textContent.toLowerCase();
                    if (rowText.includes(searchText)) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        });
    </script>
@endsection
