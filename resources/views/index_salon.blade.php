<h1>Book一覧画面</h1>
<table border="1">
    <tr>
        <th>title</th>
        <th>infomation</th>
        <th>tag</th>
    </tr>
    @foreach ($salons as $salon)
    <tr>
        <td>{{ $salon->salon_name }}</td>
        <td>{{ $salon->salon_info }}</td>
        <td>
            @foreach ($salon->categories as $category)
            {{ $category->name }}
            @endforeach
        </td>
    </tr>
    @endforeach
</table>