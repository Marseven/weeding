<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Présence</th>
            <th>Table</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registrations as $registration)
            <tr>
                <td>{{ $registration->id }}</td>
                <td>{{ $registration->attendee->last_name }}</td>
                <td>{{ $registration->attendee->first_name }}</td>
                <td>{{ $registration->attendee->email }}</td>
                <td>{{ $registration->attendee->phone }}</td>
                <td>{{ $registration->presence == 1 ? 'Oui' : 'Non' }}</td>
                <td>{{ $registration->number_table == '0' ? '-' : $registration->number_table }}
                </td>
                <td>{{ $registration->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
