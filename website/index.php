<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker | PHP website - raizTECH</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
</head>
<body>
        <?php 
            $result = file_get_contents("http://node-docker-container:9988/projects");
            $projects = json_decode($result);
        ?>

        <div class="container">
        <table class="table">
            <thead>
                <th>Title</th>
                <th>Description</th>
                <th>Year</th>
            </thead>
            <tbody>
                <?php foreach($projects as $project): ?>
                    <tr>
                        <td><?php echo $project->title; ?></td>
                        <td><?php echo $project->description; ?></td>
                        <td><?php echo $project->year; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </body>
</html>