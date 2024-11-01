<h1>админ панелька</h1>

<table>
    <thead>
        <tr>
            <th>Номер заявления</th>
            <th>Номер авто</th>
            <th>Текст заявления</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($reports as $reports)
    <tr>
        <td> {{ $reports->id }}</td>
        <td>{{ $reports->number }}</td>
        <td>{{ $reports->description }}</td>
    </tr> 
    @endforeach
    </tbody>
</table>

