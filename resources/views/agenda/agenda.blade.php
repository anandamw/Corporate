@extends('layouts.template')



@section('content')
    <div class="container-fluid py-4 px-5">


        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center mb-3">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Tabel Agenda</h6>
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

                                <button type="button"
                                    class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2">
                                    <span class="btn-inner--icon">
                                        <i class="fas fa-download me-2"></i> <!-- Ikon Download -->
                                    </span>
                                    <a href="/agenda/export" class="btn-inner--text text-white">Download Excel</a>
                                </button>

                                <a href="/agenda/print"
                                    class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2">
                                    <span class="btn-inner--icon">
                                        <i class="fas fa-print me-2"></i> <!-- Ikon Print -->
                                    </span>
                                    <span class="btn-inner--text">Print PDF</span>
                                </a>


                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 py-0">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0 table-data">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7">No</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Link</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7">Nomer Surat</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Pengirim</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Perihal</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Tanggal Masuk
                                        </th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Tanggal
                                            Keluar</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Pengelola
                                        </th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Status</th>
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
                                                    <span class="text-sm font-weight-normal ">Tidak ada link</span>
                                                </td>
                                            @else
                                                <td>
                                                    <span class="text-sm font-weight-normal">
                                                        <a href="{{ $item->link }}" style="color: #007bff"> Buka Link >>
                                                        </a>
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
                                                <span class="text-sm font-weight-normal">{{ $item->perihal }}</span>
                                            </td>
                                            <td>
                                                <span class="text-sm font-weight-normal">{{ $item->tgl_masuk }}</span>
                                            </td>
                                            <td>
                                                <span class="text-sm font-weight-normal">{{ $item->tgl_keluar }}</span>
                                            </td>
                                            <td>
                                                <span class="text-sm font-weight-normal">{{ $item->pengelola }}</span>
                                            </td>
                                            <td>
                                                <span class="text-sm font-weight-normal">{{ $item->status }}</span>
                                            </td>

                                            <td class="align-middle">
                                                <a href="javascript:void(0)" class="text-secondary me-2"
                                                    data-bs-toggle="modal" data-bs-target="#linkModal{{ $item->id }}">
                                                    <i class="fas fa-link"></i>
                                                </a>
                                                <a href="#" class="text-primary me-2" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="text-danger me-2" data-bs-toggle="tooltip"
                                                    title="Hapus">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>

                                                <!-- Modal -->
                                                <div class="modal fade" id="linkModal{{ $item->id }}" tabindex="-1"
                                                    aria-labelledby="linkModalLabel{{ $item->id }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="linkModalLabel{{ $item->id }}">Link Modal</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="/recipient/{{ $item->id }}/update"
                                                                method="POST">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="linkInput{{ $item->id }}"
                                                                            class="form-label">Masukkan Link</label>
                                                                        <input type="url" class="form-control"
                                                                            id="linkInput{{ $item->id }}"
                                                                            name="link"
                                                                            placeholder="https://contoh.com" required>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-xs text-muted text-lg-start">
                            Copyright
                            ©
                            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            Corporate UI by
                            <a href="https://www.creative-tim.com" class="text-secondary" target="_blank">Creative
                                Tim</a>.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-xs text-muted"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-xs text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-xs text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link text-xs pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
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
