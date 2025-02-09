@extends('layouts.template')



@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card card-background card-background-after-none align-items-start mt-4 mb-5">
                    <div class="full-background" style="background-image: url('../assets/img/header-blue-purple.jpg')"></div>
                    <div class="card-body text-start p-4 w-100">
                        <h3 class="text-white mb-2">Collect your benefits 🔥</h3>
                        <p class="mb-4 font-weight-semibold">
                            Check all the advantages and choose the best.
                        </p>
                        <button type="button"
                            class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                            <span class="btn-inner--icon">
                                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" class="d-block me-2">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.61036 4.52196C6.34186 4.34296 5.99664 4.32627 5.71212 4.47854C5.42761 4.63081 5.25 4.92731 5.25 5.25V8.75C5.25 9.0727 5.42761 9.36924 5.71212 9.52149C5.99664 9.67374 6.34186 9.65703 6.61036 9.47809L9.23536 7.72809C9.47879 7.56577 9.625 7.2926 9.625 7C9.625 6.70744 9.47879 6.43424 9.23536 6.27196L6.61036 4.52196Z" />
                                </svg>
                            </span>
                            <span class="btn-inner--text">Watch more</span>
                        </button>
                        <img src="../assets/img/3d-cube.png" alt="3d-cube"
                            class="position-absolute top-0 end-1 w-25 max-width-200 mt-n6 d-sm-block d-none" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center mb-3">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Recent transactions</h6>
                                <p class="text-sm mb-sm-0">These are details about the last transactions</p>
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
                                    <span class="btn-inner--text">Download</span>
                                </button>

                                <a href="/create/surat-masuk"
                                    class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2">
                                    <span class="btn-inner--icon">
                                        <i class="fas fa-plus me-2"></i> <!-- Ikon Tambah -->
                                    </span>
                                    <span class="btn-inner--text">Tambah Surat</span>
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
                                                    <span class="text-sm font-weight-normal" style="color: #007bff">>>
                                                        {{ $item->link }}</span>
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
                                                <!-- Edit Icon -->
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                    data-bs-toggle="tooltip" data-bs-title="Edit user"
                                                    style="font-size: 16px; margin-right: 10px;">
                                                    <i class="fas fa-edit"
                                                        style="color: #007bff; transition: color 0.3s;"></i>
                                                </a>
                                                <!-- Delete Icon -->
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                    data-bs-toggle="tooltip" data-bs-title="Delete user"
                                                    style="font-size: 16px;">
                                                    <i class="fas fa-trash-alt"
                                                        style="color: #dc3545; transition: color 0.3s;"></i>
                                                </a>
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
