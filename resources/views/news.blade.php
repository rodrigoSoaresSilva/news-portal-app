<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $n)
            <tr>
                <td>{{ $n->title }}</td>
                <td>{{ $n->content }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
