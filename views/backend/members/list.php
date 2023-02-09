<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$members = sql_select('membre INNER JOIN statut ON membre.numStat = statut.numStat', "*");



//sql_select('STATUT INNER JOIN MEMBRE ON statut.numStat = membre.numStat');
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Liste des membres</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Pseudo</th>
                        <th>E-Mail</th>
                        
                        <th>Statut</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($members as $member) { ?>
                        <tr>
                            <td><?php echo $member['numMemb']; ?></td>
                            <td><?php echo $member['prenomMemb']; ?></td>
                            <td><?php echo $member['nomMemb']; ?></td>
                            <td><?php echo $member['pseudoMemb']; ?></td>
                            <td><?php echo $member['eMailMemb']; ?></td>
                            
                            
                          

                            <td><p><?php  
                                echo($member['libStat']);
                            ?></p></td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo $member['numMemb']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numMemb=<?php echo $member['numMemb']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>

