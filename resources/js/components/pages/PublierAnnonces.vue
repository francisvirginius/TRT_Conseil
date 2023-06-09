<template>
    <div>
        <main id="annoce" class="container">
        <form method="POST" action="./form.php">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <h1 class="h3 mb-3 fw-normal text-center fs-1">Créé une annonce</h1>
            <div class="name">
                
                <label for="floatingInput">Poste rechercher</label>
                <input class="fs-5" name="poste">

                <label type="text" >Lieux du travail</label>
                <input class="fs-5" name="lieux">

                <label class="fs-3" for="">description du poste</label>
                <textarea id="story" name="description" rows="5" cols="33">
                  description détaillée (horaires, salaire, etc.).
                  </textarea>
            </div>
        </div>
      
       
        <div class="text-center">
            <button class="btn btn-dark" type="submit">Envoyer</button>
        </div>
    </form>
 </main>
    </div>
   </template>
   
   <script>
  
   </script>
   
   <style scoped>
   /* Vous pouvez ajouter des styles personnalisés pour le composant ici */
   </style>
   