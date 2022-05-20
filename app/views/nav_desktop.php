<link rel="stylesheet" href="../public/assets/lib/fontawsome/css/all.css">
<link rel="stylesheet" href="../public/assets/css/navbar.css">


<div class="Navbar" style="">
        <div class="control">
            <button class="Navbar-control"><i class="fa fa-graduation-cap"></i></button>
        </div>
        <div class="Navbar-Link">
            <a href="http://localhost/G-School/public/index.php" id="home"><i class="fa fa-home"></i></a>
            <a href="<?= url("inscription")?>" id="addEtu"><i class="fa fa-user-plus"></i></a>
            <a href="<?= url("reinscription")?>" id="reAddEtu"><i class="fa fa-user-edit"></i></a>
            <a href="<?= url("ajout_note")?>" id="addNotes"><i class="fa fa-notes-medical"></i></a>
            <a href="<?=url("affichage_note")?>" id="showNotes" ><i class="fa fa-clipboard"></i></a>
            <a href="<?=url("affichage_resultat")?>" id="result"><i class="fa fa-clipboard-check" ></i></a>
        </div>
</div>
<?php 
   echo "
        <script>
            const home = document.getElementById('home');
            const addEtu = document.getElementById('addEtu');
            const reAddEtu = document.getElementById('reAddEtu');
            const addNotes = document.getElementById('addNotes');
            const showNotes = document.getElementById('showNotes');
            const resultat = document.getElementById('result');
            let url = window.location.href;
            
            // index //
            if(url == 'http://localhost/G-School/public/index.php'){
       
                home.classList.add('active');
            } else {
     
                home.classList.add('non-active');
            }

            // inscription //
            if(url == 'http://localhost/G-School/public/index.php?p=inscription'){
    
                addEtu.classList.add('active');
            } else {
              
                addEtu.classList.add('non-active');
            }
            // reinscription //
            if(url == 'http://localhost/G-School/public/index.php?p=reinscription'){
             
                reAddEtu.classList.add('active');
            } else {
           
                reAddEtu.classList.add('non-active');
            }
            // ajout note //
            if(url == 'http://localhost/G-School/public/index.php?p=ajout_note'){
             
                addNotes.classList.add('active');
            } else {
           
                addNotes.classList.add('non-active');
            }
            // affichage note //
     
            if(url == 'http://localhost/G-School/public/index.php?p=affichage_note'){
             
                showNotes.classList.add('active');
            } else {
           
                showNotes.classList.add('non-active');
            }

            // affichage resultat //
            if(url == 'http://localhost/G-School/public/index.php?p=affichage_resultat'){
             
                resultat.classList.add('active');
            } else {
           
                resultat.classList.add('non-active');
            }
        </script>
   ";
?>