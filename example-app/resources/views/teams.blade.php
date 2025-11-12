<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Teams</title>
    </head>
    <body>
        <h1>Teams Page</h1>

        <script>
            // Fetch teams data from API
            fetch('/api/teams')
                .then(response => response.json())
                .then(data => {
                    console.log('Teams data fetched:', data);
                    // Data is fetched but not displayed
                })
                .catch(error => {
                    console.error('Error fetching teams:', error);
                });
        </script>
    </body>
</html>
