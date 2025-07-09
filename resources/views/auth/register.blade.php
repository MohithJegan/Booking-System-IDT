<form method="POST" action="{{ route('register') }}">
    @csrf

    <input name="first_name" required placeholder="First Name">
    <input name="last_name" required placeholder="Last Name">
    <input name="email" type="email" required placeholder="Email">
    <input name="phone_number" placeholder="Phone Number">
    <input name="address" placeholder="Address">
    <input name="city" placeholder="City">
    <input name="province" placeholder="Province">
    <input name="postal_code" placeholder="Postal Code">

    <label>
        Subscribe to newsletter:
        <select name="subscribe">
            <option value="yes">Yes</option>
            <option value="no" selected>No</option>
        </select>
    </label>

    <input name="password" type="password" required placeholder="Password">
    <input name="password_confirmation" type="password" required placeholder="Confirm Password">

    <button type="submit">Register</button>
</form>
