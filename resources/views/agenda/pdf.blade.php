<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>No</th>

                <th>Link</th>
                <th>Nomer Surat</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
                <th>Pengelola</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $item)
                <tr style="text-align: center;">
                    <td>
                        <div>
                            <div>
                                <p style="font-weight: bold; font-size: 0.9rem">{{ $loop->iteration }}</p>
                            </div>
                        </div>
                    </td>
                    @if ($item->link == null)
                        <td>
                            <span class="text-sm font-weight-normal" style="color: #b62700">No link available</span>
                        </td>
                    @else
                        <td>
                            <span class="text-sm font-weight-normal">
                                <a href="{{ $item->link }}" style="color: #0030b6"> Open Link >>
                                </a>
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
                        <span>{{ $item->perihal }}</span>
                    </td>
                    <td>
                        <span>{{ $item->tgl_masuk }}</span>
                    </td>
                    <td>
                        <span>{{ $item->tgl_keluar }}</span>
                    </td>
                    <td>
                        <span>{{ $item->role }}</span>
                    </td>
                    <td>
                        <span>{{ $item->status }}</span>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
