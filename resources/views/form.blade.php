<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="">
        <div>
            <label for="formcontrol1">Provinsi</label>
            <select name="provinsi" id="provinsi">
                <option>Pilih Provinsi</option>
                @foreach ($provinces as $provinsi)
                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                @endforeach
            </select>
        </div>
    </form>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function() {
                $('provinsi').on('change', function() {
                    var provinsi_id = $(this).val();
                    let id_provinsi = $('#provinsi').val();
                })
            })
        })
    </script>
</body>

</html>