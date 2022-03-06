<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Paneli</title>
            <!-- MDB icon -->
            <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
            <!-- Google Fonts Roboto -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>
            <!-- MDB -->
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    @include('admin.adminnavbar', ['suankisayfa' => 4, 'bodymargin' => 80])


    <div class="mx-5 py-3">
        <h1 class="header">İletişim Talepleri</h1>
    </div>


    <div class="mx-5">
        <table class="table">
            <thead>
              <tr>

                <th scope="col">Talep ID</th>
                <th scope="col">İsim</th>
                <th scope="col">Email</th>
                <th scope="col">Telefon Numarası</th>
                <th scope="col">Konu</th>
                <th scope="col">Mesaj</th>
                <th scope="col">Tarih</th>
                <th scope="col">Sil</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $talepler as $talep )

                <tr>

                    <td>{{$talep->id}}</td>
                    <td>{{$talep->name}}</td>
                    <td>{{$talep->email}}</td>
                    <td>{{$talep->phone_number}}</td>
                    <td>{{$talep->subject}}</td>
                    <td><textarea name="" id="" cols="30" rows="3">{{$talep->message}}</textarea></td>
                    <td>{{$talep->created_at}}</td>
                    <td><a href="{{ route('iletisim_talep_sil', ['id' => $talep->id]) }}" class="btn btn-danger">Sil</a></td>
                </tr>

                @endforeach

            </tbody>
          </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $talepler->links() }}
    </div>


</body>
</html>
