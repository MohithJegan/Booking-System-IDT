
    <h1>User Dashboard</h1>
    <p>Welcome {{ auth()->user()->first_name }}</p>

    <h2>Your Vehicles</h2>

@if($items->isEmpty())
    <p>No vehicles added yet.</p>
@else
    <ul>
        @foreach($items as $item)
            <li>
                <strong>Type:</strong> {{ $item->type }}<br>
                <strong>Name:</strong> {{ $item->name }}<br>
                <strong>Description:</strong> {{ $item->description }}<br>
                <strong>Social:</strong> {{ $item->social }}<br><br>
            </li>
        @endforeach
    </ul>
@endif


