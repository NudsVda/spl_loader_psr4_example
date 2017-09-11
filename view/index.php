<html>
    <body>
        <h1>Olá, turma!</h4>        
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($pessoas as $p) :
            ?>
                    <tr>
                        <td><?= $p['nome'] ?></td>
                        <td><?= $p['idade'] ?></td>
                    </tr>
            <?php
                endforeach
            ?>
            </tbody>
        </table>
    </body>
</html>