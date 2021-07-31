@foreach($akun as $data)
    <table id = "example" class="table table-bordered table-striped" style="height: 300px;">
        <thead>
            <tr>
                <th>{{ $data->noAkun}}</th>
            </tr>
            <tr>
                <th>Tanggal</th>
                <th>Perkiraan</th>
                <th>Ref</th>
                <th>Debet</th>
                <th>Kredit</th>
            </tr>
        </thead>
        @foreach($detail as $value)
            <tr>
                <th>{{$value->perkiraan}}</th>
            </tr>
        @endforeach
        <tfoot>
            <tr>
                <th>Tanggal</th>
                <th>Perkiraan</th>
                <th>Ref</th>
                <th>Debet</th>
                <th>Kredit</th>
            </tr>
        </tfoot>
    </table>
@endforeach