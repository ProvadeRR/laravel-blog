<tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category->name }}</td>
    <td>{{ $category->slug }}</td>
    <td>{{ $category->posts->count() }}</td>
    <td><div><a  href="{{ route('admin.categories.edit', $category->id) }}" style="border: none;"><img src="https://icon-icons.com/icons2/624/PNG/32/Create_New-80_icon-icons.com_57345.png"></a>
            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить">
            </form>
</tr>
