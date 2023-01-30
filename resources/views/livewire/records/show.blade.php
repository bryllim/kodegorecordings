<div>
    <!-- Recordings Table -->
    <h1 class="fw-bold">Recordings</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Topic</th>
                <th scope="col">Link</th>
                <th scope="col">Notes</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $recordings as $recording )
            <tr>
                <td>{{ date_format(new DateTime($recording->date), "F j, Y") }}</td>
                <td>{{ $recording->topic }}</td>
                <td><a href="{{ $recording->amlink }}">AM</a> / <a href="{{ $recording->pmlink }}">PM</a></td>
                <td></td>
                <td><button wire:click="delete( {{ $recording->id }} )" class="btn btn-sm btn-dark"><i class="fa fa-trash"></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>