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

    @include('admin.adminnavbar', ['suankisayfa' => 1, 'bodymargin' => 80])


    <div class="mx-5 py-3">
        <h1 class="header">Admin Paneli</h1>
    </div>


    <div class="mx-5">
        <table class="table">
            <thead>
              <tr>

                <th scope="col">Post ID</th>
                <th scope="col">Post Başlık</th>
                <th scope="col">Kullanıcı</th>
                <th scope="col">Sil</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $posts as $post )

                <tr>

                    <td>{{$post->id}}</td>
                    <td>{{$post->PostBaslik}}</td>
                    <td>{{$post->Kullanici}}</td>
                    <td><a href="{{ route('postdelete', ['id' => $post->id]) }}" class="btn btn-danger">Sil</a></td>
                </tr>

                @endforeach

            </tbody>
          </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>


</body>
</html>
