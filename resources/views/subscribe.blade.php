<form method="post" action="/sub">
    {{ csrf_field() }}
    <div>
        <input type="string" name="email" placeholder="email"/>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
