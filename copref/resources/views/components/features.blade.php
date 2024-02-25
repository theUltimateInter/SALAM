<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <title>Document</title>
<style>
      /* cartes */
.carte{
    border: 1px white solid;
    background-color: #e56551;
    height: 180px;
    width: 180px;
    border-radius: 20px;
    margin: 8px;
}
.carte2{
  background:#3a66f7;
}
.carte h2, .carte p{
    margin-top: 15px;
    font-family: Georgia, 'Times New Roman', Times, serif;
}

.carte h2{
    margin-top: 40px;
    
}

/* 1rst  */
.para{
  font-size: 15;
  max-width: 95%;
}
.firstSection, .secondSection{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items:flex-start;
}
.firstSection{
  margin-right: 3%;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  font-weight: bold;
  
}

.btn1{
  border: none;
  padding: 8px 20px ;
  background: #3a66f7;
  color: white;
  border-radius: 15px
}
.btn1:hover {
  background:#6286fd;
  box-shadow: #698cfdce 2px 5px 20px;
}


/* ***** */
.conteneur{
  background-size:cover ;
  height: 70vh;
  padding: 2%;
  background-image: url('{{asset('avo.jpg')}}');
  
  
}

/* resposvity */
@media (max-width: 802px) and (min-width: 522px) {
  
  .conteneur{
  height: 70vh;
  display: block !important;
  padding-top: 4%

}

.secondSection{
  width: 100%;
  margin-top: 7%
}

.line{
  width: 100%;
}

.line .segment{
  display: flex !important;
  flex-direction: row;
}

 }

@media (max-width: 802px ){
  .firstSection{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center
  } 
}

/* Medium devices*/
@media (max-width: 567px) { 
.conteneur{
  height: 100vh;
}
 }

/* Large devices*/
@media (max-width: 339px ) { 
  .conteneur{
  height: 180vh;
}
 }


</style>
</head>
<body>
    <div class="card bg-dark text-white "><div class="container">
          <div class="row card-img-overlay conteneur">
            {{-- 1 --}}
                <div class="col-md-7 firstSection">
                  <p class="para">Découvrez notre engagement envers l'excellence,
                    notre réputation solide et notre expertise
                    multidisciplinaire, qui nous permettent de réaliser
                    des projets innovants et de contribuer au
                    développement de notre pays.</p>
                    <button class='btn1'>En savoir plus</button>
                </div>

            {{-- 2 --}}
            <div class="col-md-4 secondSection">
              <div class="row line">
                {{-- 1st --}}
                  
                <div class="col ">
                  <div class="row segment">
                    <div class="col carte">
                      <center>
                        <h2>+25</h2>
                        <p>ans d'experience</p>
                      </center>
                    </div>
                    <div class="col carte carte2">
                      <center>
                        <h2>+80</h2>
                        <p>ans d'experience</p>
                      </center>
                    </div>
                  </div>
                </div>

                {{-- 2nd --}}
                <div class="col">
                  <div class="row">
                    <div class="col carte carte2">
                      <center>
                        <h2>+500</h2>
                        <p>Collaborateurs</p>
                      </center>
                    </div>
                    <div class="col carte ">
                      <center>
                        <h2>+100</h2>
                        <p>Projets réalisées</p>
                      </center>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
    </div>
    
</body>
</html>
