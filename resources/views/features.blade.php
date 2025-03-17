<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Features Table</title>
    </head>
    <body>
        <div class="container">
            <h1 class="mb-4">Laravel Features</h1>
            
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Feature Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($features as $feature)
                        <tr>
                            <td>{{ $feature->id }}</td>
                            <td>{{ $feature->feature_name }}</td>
                            <td>{{ $feature->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
