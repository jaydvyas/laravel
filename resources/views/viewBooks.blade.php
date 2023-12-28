    <table style="border:2px solid black">
    <tr>
        <th style="border:1px solid black; padding: 8px">Book Name</th>
        <th style="border:1px solid black; padding: 8px">Amount</th>
        <th style="border:1px solid black; padding: 8px">Published Date</th>
        <th style="border:1px solid black; padding: 8px">Author Name</th>
        <th style="border:1px solid black; padding: 8px">File</th>
    </tr>
    @foreach($data as $d)
        <tr>
            <td style="border:1px solid black; padding: 8px">{{ $d->{"Book Name"} }}</td>
            <td style="border:1px solid black; padding: 8px">{{$d->amount}}</td>
            <td style="border:1px solid black; padding: 8px">{{ $d->{"Published Date"} }}</td>
            <td style="border:1px solid black; padding: 8px">{{ $d->{"Author Name"} }}</td>
            <td style="border:1px solid black; padding: 8px">
                <a href="{{route("download",$d->file)}}">Download</a>
                <a href="{{route("view",$d->file)}}">View</a>
            </td>
        </tr>
    @endforeach
</table>
