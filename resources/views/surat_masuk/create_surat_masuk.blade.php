@extends('layouts.template')



@section('content')
    <div class="container-fluid py-4 px-5">


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
                                    <input type="text" class="form-control form-control-sm" placeholder="Search">
                                </div>
                                <button type="button"
                                    class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2">
                                    <span class="btn-inner--icon">
                                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="d-block me-2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>
                                    </span>
                                    <span class="btn-inner--text">Download</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 py-0">
                        <div class=" p-5">
                            <form action="/transactions" method="POST">
                                <div class="row">
                                    <div class="col-xl-6 col-12">

                                        <div class="mb-3">
                                            <label for="transaction_name" class="form-label">No Surat</label>
                                            <input type="text" class="form-control" id="transaction_name"
                                                name="transaction_name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12">
                                        <div class="mb-3">
                                            <label for="pengerim" class="form-label">Pengerim</label>
                                            <input type="text" class="form-control" id="pengerim" name="pengerim"
                                                required>
                                        </div>
                                    </div>
                                    <div class=" col-12">
                                        <div class="mb-3">
                                            <label for="perihal" class="form-label">Perihal</label>
                                            <input type="text" class="form-control" id="perihal"
                                                name="transaction_name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12">
                                        <div class="mb-3">
                                            <label for="date" class="form-label">Tanggal Masuk Surat</label>
                                            <input type="date" class="form-control" id="date" name="tgl_masuk"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12">
                                        <div class="mb-3">
                                            <label for="date" class="form-label">Tanggal Terakhir Surat</label>
                                            <input type="date" class="form-control" id="date" name="tgl_trakhir"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-12">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Pengelola</label>
                                            <select name="pengelola" class="form-select">
                                                <option selected disabled>no selected</option>
                                                <option value="sekretaris">Sekretaris</option>
                                                <option value="pemdes">Pemdes</option>
                                                <option value="peukd">Peukd</option>
                                                <option value="pkkmd">Pkkmd</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12">

                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" id="status" name="status">
                                                <option selected disabled>no selected</option>

                                                <option value="Gambar Pending">Gambar Pending</option>
                                                <option value="Gambar Centang">Gambar Centang</option>
                                                <option value="Gambar Silang">Gambar Silang</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="/surat-masuk" class="btn btn-secondary">Cancel</a>
                                    </div>

                                </div>

                            </form>
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
@endsection
