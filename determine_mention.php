<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Moyenne</title>
</head>
<body>
<div class="container">
    <div class="form-container text-center">
        <h1>Déterminez la Mention obtenue au bac</h1>
        <form method="post">
            <label for="note">Entrer votre moyenne : </label>
            <input type="number" name="note" id="note">
            <button class="btn btn-secondary" type="submit" name="submit">valider</button>
        </form>

    <?php
        $moyenne='';
        $decision="";
        $mention="";

        if(empty($_POST['note'])){
            echo "veuillez entrer une note avant de valider";
        }

        if(isset($_POST['submit'])){
            $moyenne = $_POST['note'];
        
        if($moyenne >= 10){
            $decision = "Admis(e)";
        }else{
            $decision = "Eliminé(e)";
        }

        if($moyenne <0 || $moyenne >20){
            echo "Veuillez saisir une moyenne comprise entre 1 et 20";

            }elseif
                ($moyenne >= 17){
                    $mention = "Excellente";
                    echo $decision . " avec une mention " . "<span class='text-success fs-5'>" . $mention . "</span>";
            
            }elseif
                ($moyenne >= 16){
                    $mention = "Très Bien";
                    echo $decision . " avec une mention " . "<span class='text-primary fs-5'>" . $mention . "</span>";
            
            }elseif
                ($moyenne >= 14){
                    $mention = "Bien";
                    echo $decision . " avec une mention " . "<span class='text-info fs-5'>" . $mention . "</span>";
                
            }elseif
                ($moyenne >= 12){
                    $mention = "Assez Bien";
                    echo $decision . " avec une mention " . "<span class='text-warning fs-5'>" . $mention . "</span>";
                
            }elseif
                ($moyenne >= 10){
                    $mention = "Passable";
                    echo $decision . " avec une mention " . "<span class='text-danger fs-5'>" . $mention . "</span>";
            }elseif
                ($moyenne >= 1){
                    echo $decision;
            }
        }
        ?> 
    </div>
</div>

</body>
</html>

