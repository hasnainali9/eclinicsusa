
    <form method='get' action='{{route("binshopsblog.search", app('request')->get('locale'))}}' class='widget widget-site-search'>
        <input type='text' name='s' placeholder='Search...' value='{{\Request::get("s")}}'>
        <button type='submit' class='button'>Go</button>
    </form>
