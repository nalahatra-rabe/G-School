<link rel="stylesheet" href="http://localhost/G-School/public/assets/lib/fontawsome/css/all.css">
<link rel="stylesheet" href="http://localhost/G-School/public/assets/css/show_notes2.css" />


<div class="ShowNotes" id="all">
        <div class="filtre">
            <div class="filtre_items">
                <h3>Annee Universitaire :</h3>
                <select name="" id="">
            <option value="">2021-2022</option>
            <option value="">2019-2020</option>
          </select>
            </div>
            <div class="filtre_items">
                <h3>Mention :</h3>
                <select name="" id="">
            <option value="">DA2I</option>
            <option value="">RPM</option>
            <option value="">AES</option>
          </select>
            </div>
            <div class="filtre_items">
                <h3>Niveau :</h3>
                <select name="" id="">
            <option value="">L1</option>
            <option value="">L2</option>
            <option value="">L3</option>
          </select>
            </div>
            <div class="filtre_items">
                <h3>Matiere :</h3>
                <select name="" id="">
            <option value="">PHP</option>
            <option value="">JAVASCRIPT</option>
            <option value="">ALGEBRE</option>
          </select>
            </div>
            <div class="filtre_items">
                <button type="button" class="confirm">Valider</button>
            </div>
        </div>
        <div class="result">
            <h3>Affichage des notes</h3>

            <a href="#rattrapage_content"><button>Liste de rattrapage</button></a>
            <table border="1" class="tb_head">
                <tr>
                    <th>M</th>
                    <th>Nom et Prenoms</th>
                    <th>Note</th>
                </tr>
            </table>
            <div class="notes">
                <table border="1" class="tb_notes" id="myTable">
                    <!-- note items -->
                    <tr>
                        <td class="matricule">4718</td>
                        <td class="nom">RAFALIMANANA Jeans Sebastien</td>
                        <td class="note">18</td>
                    </tr>
                    <!-- note items -->
                    <tr>
                        <td class="matricule">4628</td>
                        <td class="nom">RAFANAOMEZANTSOA Juliette</td>
                        <td class="note">06</td>
                    </tr>
                    <!-- note items -->
                    <tr>
                        <td class="matricule">4702</td>
                        <td class="nom">ROKOTOARISOA Hantamalala</td>
                        <td class="note">15</td>
                    </tr>
                    <!-- note items -->
                    <tr>
                        <td class="matricule">4789</td>
                        <td class="nom">MAMINIAINA Fidele</td>
                        <td class="note">08</td>
                    </tr>
                    <!-- note items -->
                    <tr>
                        <td class="matricule">4668</td>
                        <td class="nom">RIVOMALALA Junot</td>
                        <td class="note">10</td>
                    </tr>
                  
                </table>
            </div>
        </div>
    </div>
    <div class="rattrapage" id="rattrapage_content" style="transform:translateX(110%)">
        <h3>La liste des rattrapages</h3>
        <a href="">
            <button type="button" class="btn">
          <i class="fa fa-arrow-left"></i>
        </button>
        </a>
        <div class="notes">
            <table border="1" class="heading">
                <tr>
                    <td>M</td>
                    <td>Noms et Prenoms</td>
                    <td>Note</td>
                </tr>
            </table>
            <div class="tb_notes">
                <table border="1">
                    <!-- table content -->
                    <tr>
                        <td>4628</td>
                        <td>RAFANAOMEZANTSOA Juliette</td>
                        <td>06</td>
                    </tr>
                    <tr>
                        <td >4789</td>
                        <td >MAMINIAINA Fidele</td>
                        <td >08</td>
                    </tr>
                   
                </table>
            </div>
        </div>
    </div>