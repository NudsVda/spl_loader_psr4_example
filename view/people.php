<html>
    <body>
        <h1>Hi Friends!</h4>        
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($people as $p) :
            ?>
                    <tr>
                        <td><?= $p['name'] ?></td>
                        <td><?= $p['age'] ?></td>
                    </tr>
            <?php
                endforeach
            ?>
            </tbody>
        </table>
    </body>
</html>